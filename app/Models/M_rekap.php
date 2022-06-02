<?php

namespace App\Models;

use CodeIgniter\Model;

class M_rekap extends Model
{
    protected $table = 'rekap';
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal', 'nama_produk', 'stok', 'satuan'];

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
