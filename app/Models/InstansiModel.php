<?php

namespace App\Models;

use CodeIgniter\Model;

class InstansiModel extends Model
{
    protected $table = 'instansi';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['NAMA', 'ALAMAT', 'KECAMATAN', 'KOTA', 'PROVINSI'];
}
