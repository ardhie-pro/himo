<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Page4 extends Model
{
    protected $table            = 'page4';
    protected $primaryKey       = 'page4_id';
    protected $allowedFields    = ['text1', 'text2'];


    // Dates
    protected $useTimestamps = false;
}
