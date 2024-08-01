<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Event;
use App\Models\M_Page1;
use App\Models\M_Page4;
use CodeIgniter\HTTP\ResponseInterface;

class C_Berita extends BaseController
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
        $this->page4 = new M_Page4();
        $this->page1 = new M_Page1();
        $this->event = new M_Event();
    }

    public function berita()
    {
        $data['title'] = 'Berita';
        $data['hasil'] = null;
        $data['hasilevent'] = null;
        $data['page4'] = $this->page4->findAll();
        $data['page1'] = $this->page1->findAll();
        $data['event'] = $this->event->findAll();

        return view('himocontent/berita.php', $data);
    }

    public function detailberita($url = null)
    {
        $data['event'] = $this->event->where('gambar_judul', $url)->findAll();
        $data['page1'] = $this->page1->findAll();
        // $data['kategori'] = $this->kategori->findAll();
        $data['title'] = 'Berita OSIS';
        $data['hasil'] = null;

        return view('himocontent/detail_berita', $data);
    }

    public function page4()
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'Page 4';
        $data['hasil'] = null;
        $data['hasilevent'] = null;
        $data['page4'] = $this->page4->findAll();
        $data['event'] = $this->event->findAll();

        return view('admin/page4', $data);
    }

    public function aksievent()
    {
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $text3 = $this->request->getPost('text3');
        $gambar = $this->request->getFile('gambar');
        $title = trim(strtolower($text2));
        $keluar = explode(" ", $title);
        $slug = implode("-", $keluar);
        $fileName = $gambar->getRandomName();
        $gambar->move('IMGB/penyimpanan', $fileName);
        $url = 'IMGB/penyimpanan/' . $fileName;
        $this->event->insert([
            "gambar_judul" => $slug . ".html",
            "text1" =>  $text1,
            "text2" =>  $text2,
            "text3" =>  $text3,
            "gambar" => $url,
        ]);
        session()->setFlashdata('nama', 'Sukses Menambah Data');
        return redirect('page4');
    }

    // UPDATE Event
    public function updateevent($event_id = null)
    {
        if ($this->session->sudahlogin != 1) {
            return redirect()->to(base_url('login'));
        }
        $data['page4'] = $this->page4->findAll();
        $data['event'] = $this->event->findAll();
        $data['hasilevent'] = $this->event->where('event_id', $event_id)->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Edit Event';
        // dimasukan ke dalam form ^
        return view('admin/page4', $data);
    }

    // update mesin
    public function aksiupdateevent($event_id = null)
    {
        $event_id = $this->request->getPost('event_id');
        $text1 = $this->request->getPost('text1');
        $text2 = $this->request->getPost('text2');
        $text3 = $this->request->getPost('text3');
        $title = trim(strtolower($text2));
        $keluar = explode(" ", $title);
        $slug = implode("-", $keluar);
        $gambar = $this->request->getFile('gambar');
        $fileName = $gambar->getRandomName();
        $gambar->move('IMGB/penyimpanan', $fileName);
        $url = 'IMGB/penyimpanan/' . $fileName;
        if ($this->request->getFile('berita_gambar')) {
            $this->berita->update(
                $event_id,
                [
                    "gambar_judul" => $slug . ".html",
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                    "text3" =>  $text3,
                    "gambar" => $url,
                ]
            );
            return redirect()->to(base_url('page4'));
        } else {
            $this->event->update(
                $event_id,
                [
                    "gambar_judul" => $slug . ".html",
                    "text1" =>  $text1,
                    "text2" =>  $text2,
                    "text3" =>  $text3,
                ]
            );
            return redirect()->to(base_url('page4'));
        }
    }

    // delete
    public function deleteevent($event_id = null)
    {
        $data['post'] = $this->event->delete($event_id);

        return redirect()->to(base_url('page4'));
    }
}
