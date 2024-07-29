<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Page5 extends Model
{
    protected $table            = 'page5';
    protected $primaryKey       = 'page5_id';
    protected $allowedFields    = ['text1', 'text2'];


    // Dates
    protected $useTimestamps = false;
}
