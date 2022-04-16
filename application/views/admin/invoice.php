<div class="container-fluid">
<h3><i class="fas fa-file-invoice"></i> Invoice Pemesanan</h3>


<table class="table table-dark table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('admin/invoice/detail/'.
            $inv->id,'<div class="btn btn-sm btn-info"></i> <b>Detail <i class="fas fa-magnifying-glass"></div>') ?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>