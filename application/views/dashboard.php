<div class="container-fluid">

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider.png') ?>" class="d-block w-100" alt="...">
    </div>
</div>
    <div class="row text-center mt-4">

    <?php foreach ($barang as $brg) : ?>
<div class="card mt-3 ml-3" style="width: 18rem;">
  <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
    <small><?php echo $brg->keterangan ?></small><br>
    <span class="badge rounded-pill bg-success text-light mb-2">Rp. <?php echo $brg->harga ?></span>
    <a href="#" class="btn btn-sm btn-info">Tambahkan ke Keranjang</a>
   <a href="#" class="btn btn-sm btn-success">Detail</a>
  </div>
</div>

<?php endforeach; ?>
    </div>
</div>