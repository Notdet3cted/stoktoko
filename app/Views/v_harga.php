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
                        <td>Produk</td>
                        <td>Harga</td>
                        <td>action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($row as $pr) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pr['nama_produk'] ?></td>
                            <td><?= $pr['harga_produk'] ?></td>
                            <td>
                                <a href="<?= site_url('home/edit') . '/' . $pr['id'] ?>" class="btn btn-sm btn-warning">.</a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?= $this->endSection() ?>