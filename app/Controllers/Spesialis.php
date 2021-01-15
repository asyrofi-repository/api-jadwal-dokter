<?php

namespace App\Controllers;

use App\Models\SpesialisModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Spesialis extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new SpesialisModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
}
