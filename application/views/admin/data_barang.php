<div class="container-fluid">
    <button class="btn btn-sm btn-success mb-3" data-toggle="modal"
     data-target="#tambah_barang" ><i class="fas fa-circle-plus fa-sm m-1"></i>Tambah Barang</button>

     <div class="card shadow mb-4">
         <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang Yang Ada</h6>
    </div>
    <table class="table table-dark table-striped "width="100%" cellspacing="0">
    
        <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($barang as $brg) : ?>
        
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $brg->nama_brg ?></td>
        <td><?php echo $brg->keterangan ?></td>
        <td><?php echo $brg->kategori ?></td>
        <td><?php echo $brg->harga ?></td>
        <td><?php echo $brg->stok ?></td>
        <td><?php echo anchor('admin/data_barang/detail/' .$brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-magnifying-glass-plus"></i></div>') ?></td>
        <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
        <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
        <button type="button" class="fas fa-xmark" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; 
        ?>" method="post" enctype="multipart/form-data">

<div class="form group">
            <label>Nama Barang</label><br>
            <input type="text" name="nama_brg" class="form-control">
        </div>
        <div class="form group">
            <label>Keterangan</label><br>
            <input type="text" name="keterangan" class="form-control">
        </div>
<div class="form group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
            <option>Laptop</option>
            <option>Handphone</option>
            <option>Sepedah</option>
            <option>Elektronik</option>
            <option>Makanan</option>
            </select>
        </div>
<div class="form group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <div class="form group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control">
        </div>
<div class="form group">
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control">
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Save changes</button>
      </div>

      </form>
   
    </div>
  </div>
</div>