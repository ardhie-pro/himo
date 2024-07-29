<?php

namespace App\Controllers;

use App\Models\M_Page1;
use App\Models\M_Page2;
use App\Models\M_Page3;
use App\Models\M_Page4;
use App\Models\M_Event;
use App\Models\M_Page5;
use App\Models\M_Gambar;







class Home extends BaseController
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
    public function index(): string
    {
        return view('welcome_message');
    }
    public function admin()
    {

        $data['title'] = 'Login Dashboard';

        return view('admin/dashboard', $data);
    }
    public function home()
    {
        $data['page1'] = $this->page1->findAll(1);
        $data['page2'] = $this->page2->findAll(1);
        $data['page3'] = $this->page3->findAll(1);
        $data['page4'] = $this->page4->findAll(1);
        $data['event'] = $this->event->findAll();
        $data['page5'] = $this->page5->findAll(1);
        $data['gambar'] = $this->gambar->findAll();

        $data['title'] = 'Himo Sidoarjo';
        return view('himocontent/home', $data);
    }
}
