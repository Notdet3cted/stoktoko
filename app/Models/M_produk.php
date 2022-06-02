<?php

namespace App\Models;

use CodeIgniter\Model;

class M_produk extends Model
{
    protected $table = 'produk';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_produk', 'harga_produk'];

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
