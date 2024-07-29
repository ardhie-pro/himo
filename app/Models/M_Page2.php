<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Page2 extends Model
{
    protected $table            = 'page2';
    protected $primaryKey       = 'page2_id';
    protected $allowedFields    = ['text1', 'text2', 'text3', 'text4'];


    // Dates
    protected $useTimestamps = false;
}
