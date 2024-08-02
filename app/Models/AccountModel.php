<?php namespace App\Models;

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password', 'name', 'role'];
    protected $useTimestamps = false;
}
