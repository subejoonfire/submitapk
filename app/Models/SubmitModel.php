<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmitModel extends Model
{
    protected $table = 'submissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['iduser', 'nama_pengaju', 'no_hp', 'file_pdf', 'file_rar', 'link_drive', 'status'];

    public function getAllSubmissions()
    {
        return $this->findAll();
    }

    public function getSubmissionById($id)
    {
        return $this->find($id);
    }
}