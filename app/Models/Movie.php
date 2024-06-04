<?php

namespace App\Models;

use CodeIgniter\Model;

class Movie extends Model
{
    protected $table            = 'movies';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'genre_id',
        'title',
        'description',
        'release_date',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = '';

    /**
     * Mengambil film dengan genre yang sesuai.
     *
     * @param string|null $genre
     * @return array
     */
    public function getMoviesWithGenre($genre = null)
    {
        $builder = $this->db->table($this->table)
            ->select('movies.*, genres.name as genre')
            ->join('genres', 'genres.id = movies.genre_id');

        if ($genre) {
            $builder->where('genres.name', $genre);
        }

        return $builder->get()->getResultArray();
    }
}
