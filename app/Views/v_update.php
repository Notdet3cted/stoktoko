<?=
$this->extend('template');
$this->section('content')
?>

<div class="card">
    <div class="card-header text-center">
        <h2>Form Update Stok</h2>
    </div>

    <div class="card-body">
        <form action="<?= site_url('home/update') ?>">

            <div class="form-group">
                <label>Tanggal Pengecekan</label>
                <input type="date" class="form-control" name="tanggal">
            </div>

            <div class="form-group">
                <label>Produk</label>
                <select class="form-control select-product" name="nama_produk">
                    <?php
                    foreach ($row as $pr) { ?>
                        <option value="<?= $pr['nama_produk'] ?>"> <?= $pr['nama_produk'] ?></option>
                    <?php } ?>
                    ?>

                </select>
            </div>

            <div class="form-group">
                <label>Satuan</label>
                <select class="form-control" name="satuan">
                    <option value="renteng">Renteng</option>
                    <option value="dus">Dus</option>
                    <option value="pack">Pack</option>
                </select>
            </div>

            <div class="form-group">
                <label for=""> Stok </label>
                <input type="number" class="form-control" name="stok">
            </div>

            <button type="submit" class="btn btn-md btn-block btn-primary"> Update </button>

        </form>
    </div>

</div>

<?= $this->endSection() ?>