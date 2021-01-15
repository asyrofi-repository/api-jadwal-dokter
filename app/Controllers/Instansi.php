<?php

namespace App\Controllers;

use App\Models\InstansiModel;
use App\Models\JadwalModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Instansi extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new InstansiModel();
        $nama = $this->request->getVar('nama');
        $kota = $this->request->getVar('kota');
        $provinsi = $this->request->getVar('provinsi');
        $data = $model->like(['NAMA' => $nama, 'KOTA' => $kota, 'PROVINSI' => $provinsi])->findAll();
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->respondNoContent();
        }
    }

    public function show($id = null)
    {
        $model = new InstansiModel();
        $jadwal = new JadwalModel();
        $data = $model->find($id);
        $data['JADWAL'] = $jadwal->findByInstansi($id);
        if ($data) {
            return $this->respond($data, 200);
        } else {
            return $this->respondNoContent();
        }
    }
}
