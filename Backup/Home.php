<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $submitModel;
    
    public function __construct()
    {
        $this->submitModel = new \App\Models\SubmitModel();
    }

    public function index()
    {
        $data['submissions'] = $this->submitModel->getAllSubmissions();
        return view('Admin/index', $data);
    }

    public function add()
    {
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $rules = [
                'nama_pengaju' => 'required',
                'no_hp' => 'required|min_length[10]',
                'link_drive' => 'required|valid_url',
                'file_pdf' => 'uploaded[file_pdf]|ext_in[file_pdf,pdf]',
                'file_rar' => 'uploaded[file_rar]|ext_in[file_rar,rar,zip]'
            ];

            if ($this->validate($rules)) {
                // Upload PDF
                $pdfFile = $this->request->getFile('file_pdf');
                $pdfName = $pdfFile->getRandomName();
                $pdfFile->move('uploads/pdf', $pdfName);

                // Upload RAR
                $rarFile = $this->request->getFile('file_rar');
                $rarName = $rarFile->getRandomName();
                $rarFile->move('uploads/rar', $rarName);

                // Simpan data
                $data = [
                    'nama_pengaju' => $this->request->getPost('nama_pengaju'),
                    'no_hp' => $this->request->getPost('no_hp'),
                    'link_drive' => $this->request->getPost('link_drive'),
                    'file_pdf' => $pdfName,
                    'file_rar' => $rarName,
                    'status' => 'diajukan'
                ];

                dd($data);
                $this->submitModel->insert($data);                
                return redirect()->to('/admin')->with('success', 'Data berhasil ditambahkan');
            }
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        return view('Admin/add');
    }

    public function edit($id)
    {
        $data['submission'] = $this->submitModel->getSubmissionById($id);
        
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_pengaju' => $this->request->getPost('nama_pengaju'),
                'no_hp' => $this->request->getPost('no_hp'),
                'link_drive' => $this->request->getPost('link_drive'),
                'status' => $this->request->getPost('status')
            ];

            // Handle file uploads if new files are provided
            if ($this->request->getFile('file_pdf')->isValid()) {
                $pdfFile = $this->request->getFile('file_pdf');
                $pdfName = $pdfFile->getRandomName();
                $pdfFile->move('uploads/pdf', $pdfName);
                $data['file_pdf'] = $pdfName;
            }

            if ($this->request->getFile('file_rar')->isValid()) {
                $rarFile = $this->request->getFile('file_rar');
                $rarName = $rarFile->getRandomName();
                $rarFile->move('uploads/rar', $rarName);
                $data['file_rar'] = $rarName;
            }

            $this->submitModel->update($id, $data);
            return redirect()->to('/admin')->with('success', 'Data berhasil diupdate');
        }
        
        return view('Admin/edit', $data);
    }

    public function delete($id)
    {
        $submission = $this->submitModel->find($id);
        
        // Hapus file fisik
        if (!empty($submission['file_pdf'])) {
            unlink('uploads/pdf/' . $submission['file_pdf']);
        }
        if (!empty($submission['file_rar'])) {
            unlink('uploads/rar/' . $submission['file_rar']);
        }
        
        $this->submitModel->delete($id);
        return redirect()->to('/admin')->with('success', 'Data berhasil dihapus');
    }
}