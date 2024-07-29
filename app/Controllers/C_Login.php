<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\User;
//use App\Models\M_Adminwemart;-----------------

class C_Login extends BaseController
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

        // set modeld
        $this->user = new User();
        //      $this->wmart = new M_Adminwemart();
    }
    // wmart control_______________________________________________________________
    public function login()
    {
        if ($this->session->sudahlogin == 1) {
            return redirect()->to(base_url('admin'));
        }
        $data['title'] = 'Login';


        return view('admin/login', $data);
    }
    public function action()
    {
        $user = $this->request->getVar('user');
        $pas = $this->request->getVar('pass');
        $datauser = $this->user->where('user', $user)->first();
        if ($datauser) {
            $pass = $datauser['pass'];

            if ($pass == md5($pas)) {
                $ses_data = [
                    'user_id' => $datauser['user_id'],
                    'user' => $datauser['user'],
                    'nama' => $datauser['nama'],
                    'sudahlogin' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('admin'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('login'));
        }
    }

    public function logoutwmart()
    {
        $this->session->destroy();
        return redirect()->to(base_url('loginwemart'));
    }


    // keuangan control_____________________________________________________________
    public function loginadmin()
    {
        if ($this->session->sudahlogin == 1) {
            return redirect()->to(base_url('keuangan'));
        }
        $data['title'] = 'Login Admin';
        return view('admin/login', $data);
    }
    public function actionadmin()
    {
        $user = $this->request->getVar('adminkeuangan');
        $pas = $this->request->getVar('pass_user');
        $data = $this->keuangan->where('adminkeuangan', $user)->first();
        if ($data) {
            $pass = $data['pass_user'];
            if ($pass == md5($pas)) {
                $ses_data = [
                    'user_id' => $data['user_id'],
                    'adminkeuangan' => $data['adminkeuangan'],
                    'sudahlogin' => 1
                ];
                $this->session->set($ses_data);
                return redirect()->to(base_url('keuangan'));
            } else {
                session()->setFlashdata('pass', 'password anda salah');
                return redirect()->to(base_url('loginkeuangan'));
            }
        } else {
            session()->setFlashdata('user', 'user anda tidak diketahui');
            return redirect()->to(base_url('loginkeuangan'));
        }
    }

    public function logoutkeuangan()
    {
        $this->session->destroy();
        return redirect()->to(base_url('loginkeuangan'));
    }
    public function logout()
    {
        $this->session->destroy();
        return redirect()->to(base_url(''));
    }
    public function logoutkantin()
    {
        $this->session->destroy();
        return redirect()->to(base_url('kantin'));
    }
}
