<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController
{
    public function Index()
    {
        return View('Auth/Login');
    }

    public function Register()
    {
        return View('Auth/Register');
    }

    public function PostRegister()
    {
        $rules = [
            'Nama' => 'required',
            'Email' => 'required|valid_email',
            'Password' => 'required|min_length[8]'
        ];
        if (!$this->validate($rules)) {
            return View('Auth/Register', [
                'validations' => $this->validator,
            ]);
        }
        $data = [
            'Email' => $this->request->getPost('Email'),
            'Nama' => $this->request->getPost('Nama'),
            'Password' => password_hash($this->request->getPost('Password'), PASSWORD_BCRYPT),
            'Role' => "user"
        ];
        $user = new User();
        $user->insert($data);
        return redirect()->to('/Auth/Login');
    }

    public function PostLogin()
    {
        $rules = [
            'Nama' => 'required',
            'Password' => 'required|min_length[8]'
        ];
        if (!$this->validate($rules)) {
            return View('Auth/Login', [
                'validations' => $this->validator,
            ]);
        }
        $user = new User();
        $nama = $this->request->getPost('Nama');
        $password = $this->request->getPost('Password');
        $result = $user->where('Nama', $nama)->first();
        if (isset($result)) {
            if (password_verify($password, $result['Password'])) {
                session()->set("user", $result);
                return redirect()->to("/");
            } else {
                return View('Auth/Login', [
                    'validation' => 'password salah',
                ]);
            }
        } else {
            return View('Auth/Login', [
                'validation' => 'invalid nama dan password',
            ]);
        }
    }

    public function Logout()
    {
        session()->remove('user');
        return redirect()->to('/Auth/Login');
    }
}
