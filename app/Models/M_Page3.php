<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Page3 extends Model
{
    protected $table            = 'page3';
    protected $primaryKey       = 'page3_id';
    protected $allowedFields    = ['text1', 'text2', 'gambar'];


    // Dates
    protected $useTimestamps = false;
}
