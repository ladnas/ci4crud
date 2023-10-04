<?php 

namespace App\Models;

use CodeIgniter\Model;

class Aku_model extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $allowedFields = ["username", "password", "salt", "role_id"];
    protected $useTimestamps = false;
}