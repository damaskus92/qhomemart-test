<?php

namespace App\Controllers;

use App\Models\Movie;
use CodeIgniter\RESTful\ResourceController;

class MovieController extends ResourceController
{
    public function index()
    {
        $genre = $this->request->getGet('genre');

        if ($genre) {
            $model = new Movie();
            $movies = $model->getMoviesWithGenre($genre);

            if ($movies) {
                foreach ($movies as &$movie) {
                    unset($movie['genre_id'], $movie['created_at'], $movie['updated_at']);
                }

                return $this->respond(['data' => $movies]);
            } else {
                return $this->failNotFound('Tidak ada film yang ditemukan untuk genre ' . $genre . '.');
            }
        } else {
            return $this->fail('Parameter genre wajib diisi.');
        }
    }
}
