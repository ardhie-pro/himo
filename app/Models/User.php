<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $allowedFields    = ['nama', 'user', 'pass'];


    // Dates
    protected $useTimestamps = false;
}
