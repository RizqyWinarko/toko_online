<?php

class Model_kategori extends CI_Model
{
    public function data_laptop(){
        return $this->db->get_where("tb_barang",array('
        kategori' =>'laptop'));
     }
     public function data_handphone(){
        return $this->db->get_where("tb_barang",array('
        kategori' =>'handphone'));
     }
     public function data_sepedah(){
        return $this->db->get_where("tb_barang",array('
        kategori' =>'sepedah'));
     }
     public function data_elektronik(){
        return $this->db->get_where("tb_barang",array('
        kategori' =>'elektronik'));
     }
     public function data_makanan(){
        return $this->db->get_where("tb_barang",array('
        kategori' =>'makanan'));
     }
 }