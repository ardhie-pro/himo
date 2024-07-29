<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Gambar extends Model
{
    protected $table            = 'gambar';
    protected $primaryKey       = 'gambar_id';
    protected $allowedFields    = ['gambar'];


    // Dates
    protected $useTimestamps = false;
}
