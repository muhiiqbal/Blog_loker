<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'idpost';
    protected $allowedFields = ['title', 'content', 'date', 'username'];
    protected $useTimestamps = false;
}
