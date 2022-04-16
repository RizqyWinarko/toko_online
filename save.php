<?php foreach ($barang as $brg) : ?>

<div class="card" style="width: 18rem;">
 <img src="<?php echo base_url(). '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
 <div class="card-body">
   <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
   <small><?php echo $brg->keterangan ?></small><br>
   <span class="badge bg-warning text-dark mb-2">Rp.<?php echo $brg->harga ?></span>
   <a href="#" class="btn btn-sm btn-info">Tambahkan ke Keranjang</a>
   <a href="#" class="btn btn-sm btn-success">Detail</a>
 </div>
 
           <?php endforeach; ?>