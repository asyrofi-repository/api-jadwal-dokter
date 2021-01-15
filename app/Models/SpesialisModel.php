<?php

namespace App\Models;

use CodeIgniter\Model;

class SpesialisModel extends Model
{
    protected $table = 'spesialis';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['BIDANG'];
}
