<?php

class  Beranda extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "Beranda";
        $this->load->view('Templates/header', $data);
        $this->load->view('Beranda/index');
        $this->load->view('Templates/footer');
    }
}
