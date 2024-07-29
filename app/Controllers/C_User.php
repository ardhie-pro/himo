<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\M_Adminkeuangan;
use App\Models\User;

class C_User extends BaseController
{
    public function __construct()
    {
        // time jakarta
        date_default_timezone_set('asia/jakarta');

        // set sesion
        $this->session = session();

        // deklarasi helper model
        helper(
            [
                'form', 'url', 'array'
            ]
        );
        $this->user = new User();
    }

    // keuangan option_________________________________________________________________________
    // masuk ke halaman tambah user keuangan
    public function tambahuser()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Tambah Pengguna';
        $data['hasil'] = null;
        $data['user'] = $this->user->findAll();
        return view('halaman/register', $data);
    }

    // INPUT DATA user keuangan
    public function aksiuser()
    {
        $nama = $this->request->getPost('nama');
        $user = $this->request->getPost('user');
        $pass = $this->request->getPost('pass');
        $passu = $this->request->getPost('passu');
        if ($pass == $passu) {
            $this->user->insert([
                "nama" =>  $nama,
                "user" =>  $user,
                "pass" => md5($pass),
            ]);
            session()->setFlashdata('nama', 'Sukses Menginput User Admin');
            return redirect('tambahuser');
        } else {
            session()->setFlashdata('pass', 'password Tidak Sama');
            return redirect()->to(base_url('tambahuser'));
        }
    }

    // UPDATE DATA
    public function updateuser($user_id = null)
    {
        //if ($this->session->sudahlogin != 1) {
        //   return redirect()->to(base_url('login'));
        // }
        $data['user'] = $this->user->findAll();
        $data['hasil'] = $this->user->where('user_id', $user_id)->findAll();
        $data['title'] = 'Edit User Admin';
        // dimasukan ke dalam form ^
        return view('halaman/register', $data);
    }
    // mesin update
    public function aksiupdateuser($user_id = null)
    {
        $user_id = $this->request->getPost('user_id');
        $nama = $this->request->getPost('nama');
        $user = $this->request->getPost('user');
        $pass = $this->request->getPost('pass');
        $data['post'] = $this->user->update(
            $user_id,
            [
                "nama" => $nama,
                "user" => $user,
                "pass" => md5($pass),
            ]
        );

        return redirect()->to(base_url('tambahuser'));
    }
    public function deleteuser($user_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->user->delete($user_id);
        session()->setFlashdata('nama', 'Sukses Menghapus User Admin');
        return redirect()->to(base_url('tambahuser'));
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url('login  '));
    }
}
