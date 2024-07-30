<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Event extends Model
{
    protected $table            = 'events';
    protected $primaryKey       = 'event_id';
    protected $allowedFields    = ['text1', 'text2', 'text3', 'gambar_judul', 'gambar'];


    // Dates
    protected $useTimestamps = false;
}
