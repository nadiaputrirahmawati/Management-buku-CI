<?php

namespace App\Models;

use CodeIgniter\Model;

class Books extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id_buku';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_buku','title', 'author', 'deskripsi', 'status', 'gambar', 'tanggal', 'created_at', 'updated_at', 'genre'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

}
