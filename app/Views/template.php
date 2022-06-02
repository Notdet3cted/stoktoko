<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />


    <title>Hello, world!</title>
</head>

<body>
    <div class="py-5 text-center">
        <img class="d-block mx-auto" src="<?= base_url('assets/rt.png') ?>" alt="" width="100px">

    </div>
    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <a href="<?= site_url('home/formtambah') ?>" class="btn btn-success">Tambah Produk</a>
                <a href="<?= site_url('home/formupdate') ?>" class="btn btn-danger">Update Stok</a>
                <a href="<?= site_url('home/cekharga') ?>" class="btn btn-info">Cek Harga</a>
                <a href="<?= site_url('home/cekstok') ?>" class="btn btn-warning">Cek Stok</a>
            </div>
        </div>
        <?php
        if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-<?= session()->getFlashdata('alert') ?>"> <?= session()->getFlashdata('pesan') ?> </div>
        <?php endif ?>
        <?= $this->rendersection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Select 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Datatable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select-product').select2();
        });

        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>