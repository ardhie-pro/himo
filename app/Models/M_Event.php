<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Event extends Model
{
    protected $table            = 'event';
    protected $primaryKey       = 'event_id';
    protected $allowedFields    = ['text1', 'text2', 'text3', 'gambar'];


    // Dates
    protected $useTimestamps = false;
}
