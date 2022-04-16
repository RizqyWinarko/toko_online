<?php

class Data_barang extends CI_controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan = $this->input->post('Keterangan');
        $kategori = $this->input->post('Kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar_brg = $_FILES['gambar_brg']['name'];
        if ($gambar_brg =''){}else{
            $config ['upload_path'] = './upload';
            $config ['allowed_type'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar_brg')){
                echo "Gambar Gagal di upload!";
            }else{
                $gambar_brg=$this->upload->data('file_name');
            }
        }
        $data = array{
            'nama_brg' =$nama_brg,
            'keterangan' =$keterangan,
            'kategori' =$kategori,
            'harga' =$harga,
            'gambar_brg' =$gambar_brg,
        }
    }
}