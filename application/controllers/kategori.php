<?php

class Kategori extends CI_Controller
{
    public function laptop()
    {
        $data['laptop'] = $this->model_kategori->data_laptop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptop',$data);
        $this->load->view('templates/footer');
       
    }
    public function handphone()
    {
        $data['handphone'] = $this->model_kategori->data_handphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('handphone',$data);
        $this->load->view('templates/footer');
       
    }
    public function Sepedah()
    {
        $data['sepedah'] = $this->model_kategori->data_sepedah()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sepedah',$data);
        $this->load->view('templates/footer');
       
    }
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/footer');
       
    }
    public function makanan()
    {
        $data['makanan'] = $this->model_kategori->data_makanan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan',$data);
        $this->load->view('templates/footer');
       
    }
}
