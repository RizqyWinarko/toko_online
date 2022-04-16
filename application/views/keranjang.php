<div class="container">
<h3><i class="fas fa-basket-shopping"></i> Keranjang Belanja</h3>

    <table class="table table-warning table-striped">
        <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Sub-Total</th>
        </tr>

        <?php 
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $items['name'] ?></td>
        <td><?php echo $items['qty'] ?></td>
        <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
        <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>
        </tr>
        
        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), ) ?> </td>
        </tr>

    </table>

    <div align="right">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div
        class="btn btn-danger btn-outline-warning btn-sm"><i class="fas fa-trash m-1"></i><B>Hapus Keranjang<B></div></a>
    <a href="<?php echo base_url('dashboard/index') ?>"><div
        class="btn btn-primary btn-outline-info btn-sm"><i class="fas fa-basket-shopping m-1"></i><B>Lanjut Belanja<B></div></a>
    <a href="<?php echo base_url('dashboard/pembayaran') ?>"><div
        class="btn btn-success btn-outline-light btn-sm"><i class="fas fa-credit-card m-1"></i><B>Pembayaran<B></div></a>
   
    </div>
</div>