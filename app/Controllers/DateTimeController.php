<?php

namespace App\Controllers;


use CodeIgniter\RESTful\ResourceController;

class DateTimeController extends ResourceController
{
    public function index()
    {
        $now = date('Y-m-d H:i:s');
        $formatted = tanggal_indonesia($now, 'd F Y H:i:s');

        $data = [
            'data' => [
                'datetime' => $formatted,
            ]
        ];

        return $this->respond($data);
    }
}
