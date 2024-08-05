<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Gambar;
use CodeIgniter\HTTP\ResponseInterface;


class C_Galeri extends BaseController
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
        $this->gambar = new M_Gambar();
    }

    public function galeri()
    {
        $data['gambar'] = $this->gambar->findAll();
        $data['hasil'] = null;
        $data['title'] = 'Berita';

        return view('himocontent/galeri.php', $data);
    }
}
