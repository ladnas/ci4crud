<?php

namespace App\Models;

use CodeIgniter\Model;

class Plant_model extends Model
{
    protected $table = "plant";
    protected $primaryKey = "id_tnm";
    protected $allowedFields = ["nama_tnm", "jml_tnm"];
    protected $useTimestamps = false;
    // protected $useSoftDeletes  = true;
}
