<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<h4>History Transaksi Pembelian <strong><?= $username ?></strong></h4>
<hr>

<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID Pembelian</th>
                <th scope="col">Waktu Pembelian</th>
                <th scope="col">Total Bayar</th>
                <th scope="col">Alamat</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($buy)) : ?>
                <?php foreach ($buy as $index => $item) : ?>
                    <?php
                        $total = 0;
                        $jumlahItem = 0;
                        if (isset($product[$item['id']])) {
                            foreach ($product[$item['id']] as $dt) {
                                $total += $dt['subtotal_harga'];
                                $jumlahItem += $dt['jumlah'];
                            }
                        }
                        $total += $item['ongkir'];
                    ?>
                    <tr>
                        <th scope="row"><?= $index + 1 ?></th>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['created_at'] ?></td>
                        <td>
                            <?= number_to_currency($total, 'IDR') ?><br>
                            
                        </td>
                        <td><?= $item['alamat'] ?></td>
                        <td><?= ($item['status'] == "1") ? "Sudah Selesai" : "Belum Selesai" ?></td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#detailModal-<?= $item['id'] ?>">
                                Detail
                            </button>
                        </td>
                    </tr>

                    <!-- Detail Modal Begin -->
                    <div class="modal fade" id="detailModal-<?= $item['id'] ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Detail Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php if (isset($product[$item['id']])) : ?>
                                        <?php foreach ($product[$item['id']] as $index2 => $item2) : ?>
                                            <?= $index2 + 1 ?>)
                                            <?php if (!empty($item2['foto']) && file_exists(FCPATH . 'img/' . $item2['foto'])) : ?>
                                                <img src="<?= base_url('img/' . $item2['foto']) ?>" width="100px"><br>
                                            <?php endif; ?>
                                            <strong><?= esc($item2['nama']) ?></strong><br>
                                            <?= number_to_currency($item2['harga'], 'IDR') ?><br>
                                            (<?= $item2['jumlah'] ?> pcs)<br>
                                            <?= number_to_currency($item2['subtotal_harga'], 'IDR') ?>
                                            <hr>
                                        <?php endforeach; ?>
                                        Ongkir: <?= number_to_currency($item['ongkir'], 'IDR') ?>
                                    <?php else : ?>
                                        <p>Detail produk tidak ditemukan.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Detail Modal End -->
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
