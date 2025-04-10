<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public $UserModel;

    public function __construct()
    {
        $this->UserModel = new \App\Models\User();
    }

    public function index()
    {
        return view('Login/login');
    }
    public function register()
    {
        return view('Login/register');
    }
    public function registerAction()
    {
        $nama     = $this->request->getPost('name');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $confirm  = $this->request->getPost('confirm_password');
        if (empty($username) || empty($password) || empty($confirm)) {
            return redirect()->to(base_url('register'))->with('error', 'Semua field harus diisi')->withInput();
        }

        if ($password !== $confirm) {
            return redirect()->to(base_url('register'))->with('error', 'Konfirmasi password tidak cocok')->withInput();
        }

        $existingUser = $this->UserModel->where('username', $username)->first();
        if ($existingUser) {
            return redirect()->to(base_url('register'))->with('error', 'Username sudah digunakan')->withInput();
        }
        $this->UserModel->insert([
            'name'     => $nama,
            'username' => $username,
            'level' => 2,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        return redirect()->to(base_url('/'))->with('success', 'Registrasi berhasil, silakan login');
    }


    public function loginAction()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = $this->UserModel->where('username', $username)->first();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true,
                    'level' => $user['level'],
                ]);
                if ($user['level'] == 1) {
                    return redirect()->to('/admin');
                } else if ($user['level'] == 2) {
                    return redirect()->to('/user');
                }
            } else {
                return redirect()->to(base_url('/'))->with('error', 'Akun tidak ditemukan');
            }
        } else {
            return redirect()->to(base_url('/'))->with('error', 'Akun tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}