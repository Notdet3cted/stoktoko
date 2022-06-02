<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return $this->formtambah();
    }
    public function formupdate()

    {
        $data = [
            'row' => $this->mproduk->getData(),
        ];
        return view('v_update', $data);
    }

    public function formtambah()
    {
        return view('v_tambah');
    }

    public function add()
    {
        $req = $this->request->getVar();

        $data =
            [
                'nama_produk' => $req['nama_produk'],
                'harga_produk' => $req['harga_produk'],
            ];

        $save = $this->mproduk->save($data);
        if ($save) {

            session()->setFlashdata([
                'pesan' => 'Data berhasil ditambahkan',
                'alert'  => 'success',
            ]);
        } else {
            session()->setFlashdata([
                'pesan' => 'Data gagal ditambahkan',
                'alert'  => 'danger',
            ]);
        }
        return redirect()->to('home/formtambah');
    }

    public function prosesedit()
    {
        $req = $this->request->getVar();

        $data =
            [

                'id' => $req['id'],
                'nama_produk' => $req['nama_produk'],
                'harga_produk' => $req['harga_produk'],
            ];

        $save = $this->mproduk->save($data);
        if ($save) {

            session()->setFlashdata([
                'pesan' => 'Data berhasil diubah',
                'alert'  => 'success',
            ]);
        } else {
            session()->setFlashdata([
                'pesan' => 'Data gagal diubah',
                'alert'  => 'danger',
            ]);
        }
        return redirect()->to('home/cekharga');
    }

    public function update()
    {

        $req = $this->request->getVar();

        $data =
            [
                'nama_produk'   => $req['nama_produk'],
                'tanggal'       => $req['tanggal'],
                'satuan'        => $req['satuan'],
                'stok'          => $req['stok']
            ];
        $save = $this->mrekap->save($data);
        if ($save) {

            session()->setFlashdata([
                'pesan' => 'Data berhasil ditambahkan',
                'alert'  => 'success',
            ]);
        } else {
            session()->setFlashdata([
                'pesan' => 'Data gagal ditambahkan',
                'alert'  => 'danger',
            ]);
        }
        return redirect()->to('home/formupdate');
    }


    public function cekharga()
    {
        $data =
            [
                'row' => $this->mproduk->getData(),
            ];
        return view('v_harga', $data);
    }
    public function cekstok()
    {
        $data =
            [
                'row' => $this->mrekap->getData(),
            ];
        return view('v_stok', $data);
    }
    public function edit($id)
    {
        $data =
            [
                'row' => $this->mproduk->getData($id),
            ];
        return view('v_edit', $data);
    }
}
