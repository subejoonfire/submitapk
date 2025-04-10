<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Utama extends BaseController
{
    public function index()
    {
        return view ('Home/index');
    }
}
