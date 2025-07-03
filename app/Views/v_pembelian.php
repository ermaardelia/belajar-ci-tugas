<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>



<div class="table-responsive">
    <table class="table datatable mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>ID Pembelian</th>
                <th>Username</th>
                <th>Waktu Pembelian</th>
                <th>Total Bayar</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pembelian as $key => $row): ?>
                <?php
                    $subtotal = 0;
                    $jumlah_item = 0;
                    if (isset($product[$row['id']])) {
                        foreach ($product[$row['id']] as $detail) {
                            $subtotal += $detail['subtotal_harga'];
                            $jumlah_item += $detail['jumlah'];
                        }
                    }
                    $totalBayar = $subtotal + $row['ongkir'];
                ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= esc($row['username']) ?></td>
                    <td><?= date('d-m-Y H:i', strtotime($row['created_at'])) ?></td>
                    <td>
                        <?= number_to_currency($totalBayar, 'IDR') ?><br>
                     
                    </td>
                    <td><?= esc($row['alamat']) ?></td>
                    <td>
                        <?= $row['status'] == 1
                            ? '<span class="text-success">Sudah Selesai</span>'
                            : '<span class="text-danger">Belum Selesai</span>' ?>
                    </td>
                    <td>
                        <a href="<?= base_url('pembelian/ubah-status/' . $row['id']) ?>" class="btn btn-warning btn-sm"
                           onclick="return confirm('Yakin ubah status pesanan ini?')">Ubah Status</a>
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal-<?= $row['id'] ?>">
                            Detail
                        </button>
                    </td>
                </tr>

                <!-- Modal Detail -->
                <div class="modal fade" id="detailModal-<?= $row['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Transaksi #<?= $row['id'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php if (isset($product[$row['id']]) && count($product[$row['id']]) > 0): ?>
                                    <?php foreach ($product[$row['id']] as $index2 => $item2): ?>
                                        <p>
                                            <?= $index2 + 1 ?>)
                                            <?php if (!empty($item2['foto']) && file_exists(FCPATH . 'img/' . $item2['foto'])): ?>
                                                <img src="<?= base_url('img/' . $item2['foto']) ?>" width="100px"><br>
                                            <?php endif; ?>
                                            <strong><?= esc($item2['nama']) ?></strong><br>
                                            <?= number_to_currency($item2['harga'], 'IDR') ?><br>
                                            (<?= $item2['jumlah'] ?> pcs)<br>
                                            Subtotal: <?= number_to_currency($item2['subtotal_harga'], 'IDR') ?>
                                        </p>
                                        <hr>
                                    <?php endforeach; ?>
                                    <p><strong>Ongkir:</strong> <?= number_to_currency($row['ongkir'], 'IDR') ?></p>
                                    <p><strong>Total Bayar:</strong> <?= number_to_currency($totalBayar, 'IDR') ?></p>
                                <?php else: ?>
                                    <p>Detail produk tidak ditemukan.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
