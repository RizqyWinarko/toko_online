<div class="container fluid">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-success">
            <?php 
            $grand_total = 0;
            if ($keranjang = $this->cart->contents())
            {
                foreach ($keranjang as $item)
                {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                
                echo "<h6><B>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',', '.');
            }?>
        </div><br><br>
        <h3>Input Alamat Pengiriman dan Pembayaran</h3>

        <form method="post" action="<?php echo base_url() ?>dashboard/pesanan"> 

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda"> 
        </div>
        <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda"> 
        </div>
        <div class="form-group">
            <label>Nomer Telepon</label>
            <input type="text" name="no_telp" class="form-control" placeholder="Nomer Telepon Anda"> 
        </div>
        <div class="form-group">
            <label>Jasa Pengiriman</label>
            <select class="form-control">
            <option>JNE</option>
            <option>TIKI</option>
            <option>POS INDONESIA</option>
            <option>GRAB</option>
            <option>GOJEK</option>
            </select>
        </div>
        <div class="form-group">
            <label>Pilih Bank</label>
            <select class="form-control">
            <option>BCA - XXXXXXX</option>
            <option>BNI - XXXXXXX</option>
            <option>BRI - XXXXXXX</option>
            <option>MANDIRI - XXXXXXX</option>
            </select>
        </div>

        <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

        </form>
    </div>

    <div class="col-md-2"></div>
    </div>
</div>