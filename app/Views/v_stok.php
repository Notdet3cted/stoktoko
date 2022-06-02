<?=
$this->extend('template');
$this->section('content')
?>

<div class="card">
    <div class="card-header text-center">
        <h2>Daftar Harga</h2>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <td>No.</td>
                        <td>tanggal</td>
                        <td>produk</td>
                        <td>stok</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $pr) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pr['tanggal'] ?></td>
                            <td><?= $pr['nama_produk'] ?></td>
                            <td><?= $pr['stok'] . " " . $pr['satuan'] ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection() ?>