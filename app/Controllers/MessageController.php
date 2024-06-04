<?php

namespace App\Controllers;

use App\Models\Message;
use CodeIgniter\RESTful\ResourceController;

class MessageController extends ResourceController
{
    public function index()
    {
        $message = $this->request->getGet('message');

        if (empty($message)) {
            $response = [
                'status' => 'Gagal',
                'message' => 'Pesan tidak boleh kosong.'
            ];

            return $this->fail($response);
        }

        $model = new Message();
        $data = [
            'message' => $message
        ];
        $saved = $model->insert($data);

        if ($saved) {
            $response = [
                'status' => 'Sukses',
                'message' => 'Pesan berhasil disimpan.'
            ];
            return $this->respond($response);
        } else {
            return $this->failServerError('Gagal', 500, 'Gagal menyimpan pesan.');
        }
    }
}
