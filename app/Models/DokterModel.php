<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'list_dokter';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['NAMA', 'JENIS_KELAMIN', 'USIA', 'BIDANG'];
}
