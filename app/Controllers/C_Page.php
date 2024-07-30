<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\M_Adminkeuangan;
use App\Models\M_Page1;
use App\Models\M_Page2;
use App\Models\M_Page3;
use App\Models\M_Page4;
use App\Models\M_Event;
use App\Models\M_Page5;
use App\Models\M_Gambar;







class C_Page extends BaseController
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
        $this->page1 = new M_Page1();
        $this->page2 = new M_Page2();
        $this->page3 = new M_Page3();
        $this->page4 = new M_Page4();
        $this->event = new M_Event();
        $this->page5 = new M_Page5();
        $this->gambar = new M_Gambar();
    }

    // keuangan option_________________________________________________________________________
    // masuk ke halaman tambah user keuangan
    public function page1()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Page 1';
        $data['hasil'] = null;
        $data['page1'] = $this->page1->findAll();
        return view('admin/page1', $data);
    }

    // INPUT DATA user keuangan
    public function aksipage1()
    {
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getRandomName();
        $gambar->move('IMGB/penyimpanan', $fileName);
        $url = 'IMGB/penyimpanan/' . $fileName;
        $this->page1->insert([
            "text1" =>  $text1,
            "text2" =>  $text2,
            "gambar" => $url,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page1');
    }

    // UPDATE DATA
    public function updatepage1($page1_id = null)
    {
        //if ($this->session->sudahlogin != 1) {
        //   return redirect()->to(base_url('login'));
        // }
        $data['page1'] = $this->page1->findAll();
        $data['hasil'] = $this->page1->where('page1_id', $page1_id)->findAll();
        $data['title'] = 'Edit Page 1';
        // dimasukan ke dalam form ^
        return view('admin/page1', $data);
    }
    // mesin update
    public function aksiupdatepage1($page1_id = null)
    {
        $page1_id = $this->request->getPost('page1_id');
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $gambar = $this->request->getFile('gambar');


        if ($this->request->getFile('gambar')) {
            $fileName = $gambar->getRandomName();
            $gambar->move('IMGB/penyimpanan', $fileName);
            $url = 'IMGB/penyimpanan/' . $fileName;
            $data['post'] = $this->page1->update(
                $page1_id,
                [
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                    "gambar" => $url,
                ]

            );
            return redirect()->to(base_url('page1'));
        } else {

            $data['post'] = $this->page1->update(
                $page1_id,
                [
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                ]
            );
            return redirect()->to(base_url('page1'));
        }
    }

    public function deletepage1($page1_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->user->delete($page1_id);
        session()->setFlashdata('nama', 'Sukses Menghapus User Admin');
        return redirect()->to(base_url('page1'));
    }

    // page2
    public function page2()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Page 2';
        $data['hasil'] = null;
        $data['page2'] = $this->page2->findAll();
        return view('admin/page2', $data);
    }

    // INPUT DATA user keuangan
    public function aksipage2()
    {
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $text3 = $this->request->getPost('text3');
        $text4 = $this->request->getPost('text4');
        $this->page2->insert([
            "text1" =>  $text1,
            "text2" =>  $text2,
            "text3" =>  $text3,
            "text4" =>  $text4,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page2');
    }

    // UPDATE DATA
    public function updatepage2($page2_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['page2'] = $this->page2->findAll();
        $data['hasil'] = $this->page2->where('page2_id', $page2_id)->findAll();
        $data['title'] = 'Edit Page 2';
        // dimasukan ke dalam form ^
        return view('admin/page2', $data);
    }
    // mesin update
    public function aksiupdatepage2($page2_id = null)
    {
        $page2_id = $this->request->getPost('page2_id');
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $text3 = $this->request->getPost('text3');
        $text4 = $this->request->getPost('text4');
        $data['post'] = $this->page2->update(
            $page2_id,
            [
                "text1" =>  $text1,
                "text2" =>  $text2,
                "text3" =>  $text3,
                "text4" =>  $text4,
            ]

        );
        return redirect()->to(base_url('page2'));
    }
    public function deletepage2($page2_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->page2->delete($page2_id);
        session()->setFlashdata('nama', 'Sukses Menghapus');
        return redirect()->to(base_url('tambahuser'));
    }

    //page 3
    public function page3()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Page 1';
        $data['hasil'] = null;
        $data['page3'] = $this->page3->findAll();
        return view('admin/page3', $data);
    }

    // INPUT DATA user keuangan
    public function aksipage3()
    {
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getRandomName();
        $gambar->move('IMGB/penyimpanan', $fileName);
        $url = 'IMGB/penyimpanan/' . $fileName;
        $this->page3->insert([
            "text1" =>  $text1,
            "text2" =>  $text2,
            "gambar" => $url,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page3');
    }

    // UPDATE DATA
    public function updatepage3($page3_id = null)
    {
        //if ($this->session->sudahlogin != 1) {
        //   return redirect()->to(base_url('login'));
        // }
        $data['page3'] = $this->page3->findAll();
        $data['hasil'] = $this->page3->where('page3_id', $page3_id)->findAll();
        $data['title'] = 'Edit Page 1';
        // dimasukan ke dalam form ^
        return view('admin/page3', $data);
    }
    // mesin update
    public function aksiupdatepage3($page3_id = null)
    {
        $page3_id = $this->request->getPost('page3_id');
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $gambar = $this->request->getFile('gambar');


        if ($this->request->getFile('gambar')) {
            $fileName = $gambar->getRandomName();
            $gambar->move('IMGB/penyimpanan', $fileName);
            $url = 'IMGB/penyimpanan/' . $fileName;
            $data['post'] = $this->page3->update(
                $page3_id,
                [
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                    "gambar" => $url,
                ]

            );
            return redirect()->to(base_url('page3'));
        } else {

            $data['post'] = $this->page3->update(
                $page3_id,
                [
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                ]
            );
            return redirect()->to(base_url('page3'));
        }
    }
    public function deletepage3($page3_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->user->delete($page3_id);
        session()->setFlashdata('nama', 'Sukses Menghapus User Admin');
        return redirect()->to(base_url('page3'));
    }


    // page 5

    public function page5()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Page 5';
        $data['hasil'] = null;
        $data['page5'] = $this->page5->findAll();
        $data['gambar'] = $this->gambar->findAll();

        return view('admin/page5', $data);
    }

    // INPUT DATA user keuangan
    public function aksipage5()
    {
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $this->page5->insert([
            "text1" =>  $text1,
            "text2" =>  $text2,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page5');
    }
    // event

    public function aksigambar()
    {
        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getRandomName();
        $gambar->move('IMGB/penyimpanan', $fileName);
        $url = 'IMGB/penyimpanan/' . $fileName;
        $this->gambar->insert([
            "gambar" => $url,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page5');
    }

    // UPDATE DATA
    public function updatepage5($page5_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['page5'] = $this->page5->findAll();
        $data['gambar'] = $this->gambar->findAll();

        $data['hasil'] = $this->page5->where('page5_id', $page5_id)->findAll();
        $data['title'] = 'Edit Page 1';
        // dimasukan ke dalam form ^
        return view('admin/page5', $data);
    }

    // mesin update
    public function aksiupdatepage5($page5_id = null)
    {
        $page5_id = $this->request->getPost('page5_id');
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $data['post'] = $this->page5->update(
            $page5_id,
            [
                "text1" =>  $text1,
                "text2" =>  $text2,
            ]

        );
        return redirect()->to(base_url('page5'));
    }

    // gambar mesin
    // mesin update


    public function deletepage5($page5_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->gambar->delete($page5_id);
        session()->setFlashdata('nama', 'Sukses Menghapus Title');
        return redirect()->to(base_url('page5'));
    }

    public function deletegambar($gambar_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['post'] = $this->gambar->delete($gambar_id);
        session()->setFlashdata('nama', 'Sukses Menghapus Gambar');
        return redirect()->to(base_url('page5'));
    }
}
