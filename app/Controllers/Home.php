<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{
    public function __construct()
    {
        if (!session()->get('user')) {
            header('Location: ' . base_url('Auth/Login'));
            exit();
        }
    }
    public function index(): string
    {
        $nama = session('user')['Nama'];
        $user = new User();
        $data = [
            'header' => 'Home',
            'title' => "Welcome, $nama",
            'user' => $user->findAll(),
            'no' => 1,
        ];
        return view('Home/Index', $data);
    }

    public function Profile()
    {
        $user = session('user');
        $data = [
            'header' => 'Profile',
            'title' => 'Profile',
            'Nama' => $user['Nama'],
            'Email' => $user['Email'],
            'Id' => $user['Id']
        ];
        return View("Home/Profile", $data);
    }

    public function UpdateProfile()
    {
        $rules = [
            'Email' => 'valid_email',
        ];
        if (!$this->validate($rules)) {
            return View("Home/Profile", [
                'validation' => $this->validator
            ]);
        }
        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Email' => $this->request->getPost('Email'),
        ];
        if (null !== $this->request->getPost('Password') && $this->request->getPost('Password') !== '') {
            $data['Password'] = password_hash($this->request->getPost('Password'), PASSWORD_BCRYPT);
        };
        $Id = $this->request->getPost('Id');
        $user = new User();
        $user->update($Id, $data);
        $updateUser = $user->find($Id);
        session()->set('user', $updateUser);
        return redirect()->to('/');
    }

    public function TambahUser()
    {
        $data = [
            'header' => 'Tambah',
            'title' => 'Tambah User',
        ];
        return View("Home/Tambah", $data);
    }

    public function PostUser()
    {
        $rules = [
            'Nama' => 'required',
            'Email' => 'required|valid_email',
            'Role' => 'required',
            'Password' => 'required|min_length[8]',
        ];
        if (!$this->validate($rules)) {
            return View('Home/Tambah', [
                'validation' => $this->validator
            ]);
        };
        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Email' => $this->request->getPost('Email'),
            'Password' => $this->request->getPost('Password'),
            'Role' => $this->request->getPost('Role')
        ];
        $user = new User();
        $user->insert($data);
        return redirect()->to('/');
    }

    public function EditUser($id)
    {
        $user = new User();
        $result = $user->find($id);
        $data = [
            'header' => 'Edit',
            'title' => 'Edit User',
            'Nama' => $result['Nama'],
            'Email' => $result['Email'],
            'Role' => $result['Role'],
            'Id' => $result['Id']
        ];
        return View("Home/Edit", $data);
    }

    public function UpdateUser()
    {
        $data = [];
        $rules = [
            'Email' => 'valid_email',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
        $data = [
            'Nama' => $this->request->getPost('Nama'),
            'Email' => $this->request->getPost('Email'),
            'Role' => $this->request->getPost('Role')
        ];
        if (null !== $this->request->getPost('Password') && $this->request->getPost('Password') !== '') {
            $data['Password'] = password_hash($this->request->getPost('Password'), PASSWORD_BCRYPT);
        }
        $id = $this->request->getPost('Id');
        $user = new User();
        $user->update($id, $data);
        return redirect()->to('/');
    }

    public function DeleteUser($id)
    {
        $model = new User();
        $user = $model->find($id);
        if ($user) {
            $model->delete($id);
            return redirect()->to('/');
        }
        return redirect()->to('/');
    }
}
