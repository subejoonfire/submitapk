<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    // public $SubmitModel;
    public function __construct()
    {
        // $this->SubmitModel = new \App\Models\SubmitModel();
        if (session('logged_in') != true || session('level') == 2) {
            return redirect()->to(base_url('/'));
        }
    }

    public function index()
    {
        $data = [
            'submissions' => $this->SubmitModel->where('iduser', session('id'))->findAll(),
        ];
        return view('user/index', $data);
    }
    public function form()
    {

        return view('user/form');
    }

    public function add()
    {
        $rules = [
            'no_hp' => 'required|min_length[12]',
            'link_drive' => 'required|valid_url',
            'file_pdf' => 'uploaded[file_pdf]|ext_in[file_pdf,pdf]',
            'file_rar' => 'uploaded[file_rar]|ext_in[file_rar,rar,zip]'
        ];

        if (!$this->validate($rules)) {
            dd($this->validator->getErrors());
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Jika validasi berhasil, proses data
        $pdfFile = $this->request->getFile('file_pdf');
        $pdfName = $pdfFile->getRandomName();
        $pdfFile->move('uploads/pdf', $pdfName);

        $rarFile = $this->request->getFile('file_rar');
        $rarName = $rarFile->getRandomName();
        $rarFile->move('uploads/rar', $rarName);

        $this->SubmitModel->insert([
            'nama_pengaju' => session('username'),
            'iduser' => session('id'),
            'no_hp' => esc($this->request->getPost('no_hp')),
            'link_drive' => esc($this->request->getPost('link_drive')),
            'file_pdf' => $pdfName,
            'file_rar' => $rarName,
            'status' => 'diajukan'
        ]);

        // $data = [

        // ];

        // Simpan data ke database
        // $this->submitModel->insert($data);

        // Redirect ke halaman utama setelah berhasil
        return redirect()->to(base_url('/user'))->with('success', 'Data berhasil ditambahkan');


        // Jika metode bukan POST, kembalikan ke halaman tambah
        return view('user/add');
    }


    public function form_ubah($id)
    {
        $data_pengajuan = $this->SubmitModel->find($id);
        $data = [
            'data_pengajuan' => $data_pengajuan
        ];

        return view('user/edit', $data);
    }


    public function edit($id)
    {
        // $data['submission'] = $this->SubmitModel->getSubmissionById($id);

        $data = [
            // if ($this->request->getMethod() === 'post') {

            'nama_pengaju' => $this->request->getPost('nama_pengaju'),
            'no_hp' => $this->request->getPost('no_hp'),
            'link_drive' => $this->request->getPost('link_drive'),
            'status' => $this->request->getPost('status')
        ];

        $pdfFile = $this->request->getFile('file_pdf');
        if ($pdfFile && $pdfFile->isValid() && !$pdfFile->hasMoved()) {
            $pdfName = $pdfFile->getRandomName();
            $pdfFile->move('uploads/pdf', $pdfName);
            $data['file_pdf'] = $pdfName;
        }

        $rarFile = $this->request->getFile('file_rar');
        if ($rarFile && $rarFile->isValid() && !$rarFile->hasMoved()) {
            $rarName = $rarFile->getRandomName();
            $rarFile->move('uploads/rar', $rarName);
            $data['file_rar'] = $rarName;
        }
        $this->SubmitModel->update($id, $data);

        return redirect()->to(base_url('/user'))->with('success', 'Data berhasil diupdate');
        // }

        // return view('user/edit', $data);
    }

    public function delete($id)
    {
        $this->SubmitModel->where('id', $id)->delete();
        return redirect()->to(base_url('/user'))->with('success', 'Data berhasil dihapus');
    }
}