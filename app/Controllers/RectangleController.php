<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class RectangleController extends ResourceController
{
    public function index()
    {
        $rules = [
            'length' => 'required|numeric',
            'width'  => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return $this->failValidationErrors($this->validator->getErrors());
        }

        $length = floatval($this->request->getGet('length'));
        $width = floatval($this->request->getGet('width'));

        $result = $length * $width;

        return $this->respond(['data' => [
            'luas' => $result
        ]]);
    }
}
