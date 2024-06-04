<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class GreetingsController extends ResourceController
{
    public function index()
    {
        $name = $this->request->getGet('name');
        $now = new \DateTime('now', new \DateTimeZone('Asia/Jakarta'));
        $clock = (int) $now->format('G');

        if ($clock >= 5 && $clock < 10) {
            $time = "pagi";
        } elseif ($clock >= 10 && $clock < 15) {
            $time = "siang";
        } elseif ($clock >= 15 && $clock < 18) {
            $time = "sore";
        } else {
            $time = "malam";
        }

        if (!$name) {
            return $this->fail('Nama tidak boleh kosong.');
        }

        $message = "Halo, $name! Selamat $time, semoga harimu menyenangkan dan jangan lupa tersenyum.";

        return $this->respond([
            'data' => [
                'message' => $message
            ]
        ]);
    }
}
