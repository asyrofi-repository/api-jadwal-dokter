<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\JadwalModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Dokter extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new DokterModel();
        $nama = $this->request->getVar('nama');
        $bidang = $this->request->getVar('bidang');
        $data = $model->like(['NAMA' => $nama, 'BIDANG' => $bidang])->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->respondNoContent();
        }
    }

    public function show($id = null)
    {
        $model = new DokterModel();
        $jadwal = new JadwalModel();
        $data = $model->find($id);
        $data['JADWAL'] = $jadwal->findByDokter($id);
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->respondNoContent();
        }
    }
}
