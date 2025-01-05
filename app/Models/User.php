<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'Users';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Id', 'Email', 'Nama', 'Password', 'Role'];
}
