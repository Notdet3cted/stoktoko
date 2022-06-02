<?=
$this->extend('template');
$this->section('content')
?>

<div class="card">
    <div class="card-header text-center">
        <h2>Form Tambah Produk</h2>
    </div>

    <div class="card-body">
        <form action="<?= site_url('home/add') ?>" method="POST">

            <div class="form-group">
                <label for=""> Nama Produk </label>
                <input type="text" class="form-control" name="nama_produk">
            </div>
            <div class="form-group">
                <label for=""> Harga </label>
                <input type="number" class="form-control" name="harga_produk">
            </div>

            <button type="submit" class="btn btn-primary btn-md btn-block"> Simpan </button>
        </form>
    </div>

</div>

<?= $this->endSection() ?>