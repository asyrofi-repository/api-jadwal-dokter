<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'list_jadwal';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['HARI', 'ID_INSTANSI', 'INSTANSI', 'KECAMATAN', 'KOTA', 'ID_DOKTER', 'DOKTER', 'BIDANG'];

    public function findByDokter($id = null)
    {
        return $this->db->table('list_jadwal')->select(['HARI', 'ID_INSTANSI', 'INSTANSI', 'KECAMATAN', 'KOTA'])->where('ID_DOKTER', $id)->get()->getResultArray();
    }

    public function findByInstansi($id = null)
    {
        return $this->db->table('list_jadwal')->select(['HARI', 'ID_DOKTER', 'DOKTER', 'BIDANG'])->where('ID_INSTANSI', $id)->get()->getResultArray();
    }
}
