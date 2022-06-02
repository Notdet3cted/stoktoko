<?=
$this->extend('template');
$this->section('content')
?>

<div class="card">
    <div class="card-header text-center">
        <h2>Form Edit Produk</h2>
    </div>

    <div class="card-body">
        <form action="<?= site_url('home/prosesedit') ?>" method="POST">

            <input type="hidden" value="<?= $row['id'] ?>" name="id">
            <div class="form-group">
                <label for=""> Nama Produk </label>
                <input type="text" class="form-control" value="<?= $row['nama_produk'] ?>" name="nama_produk">
            </div>
            <div class="form-group">
                <label for=""> Harga </label>
                <input type="number" value="<?= $row['harga_produk'] ?>" class="form-control" name="harga_produk">
            </div>

            <button type="submit" class="btn btn-primary btn-md btn-block"> Update </button>
        </form>
    </div>

</div>

<?= $this->endSection() ?>