<div class="container fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url(). 
        'admin/data_barang/update' ?>">

<div class="for-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control"
            value="<?Php echo $brg->nama_brg ?>">   
        </div>
        <div class="for-group">
            <label>Keterangan</label>
            <input type="hidden" name="id_brg" class="form-control"
            value="<?Php echo $brg->id_brg ?>">
            <input type="text" name="keterangan" class="form-control"
            value="<?Php echo $brg->keterangan ?>">
        </div>
        <div class="for-group">
            <label>kategori</label>
            <input type="text" name="kategori" class="form-control"
            value="<?Php echo $brg->kategori ?>">
        </div>
        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"
            value="<?Php echo $brg->harga ?>">
        </div>
        <div class="for-group">
            <label>stok</label>
            <input type="text" name="stok" class="form-control"
            value="<?Php echo $brg->stok ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-md mt-3"> Save</button>
        
        </form>

        <?php endforeach; ?>
</div>