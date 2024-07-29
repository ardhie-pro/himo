<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Page1 extends Model
{
    protected $table            = 'page1';
    protected $primaryKey       = 'page1_id';
    protected $allowedFields    = ['text1', 'text2', 'gambar'];


    // Dates
    protected $useTimestamps = false;
}
