<?php

class  Artikel extends CI_Controller
{
    public function Alquran()
    {
        $data['judul'] = "Fakta Al-Qur'an";
        $this->load->view('Templates/header', $data);
        $this->load->view('Artikel/Alquran');
        $this->load->view('Templates/footer');
    }
    public function Dzikir()
    {
        $data['judul'] = "Manfaat Dzikir";
        $this->load->view('Templates/header', $data);
        $this->load->view('Artikel/Dzikir');
        $this->load->view('Templates/footer');
    }
    public function Sholat()
    {
        $data['judul'] = "Keutamaan Sholat";
        $this->load->view('Templates/header', $data);
        $this->load->view('Artikel/Sholat');
        $this->load->view('Templates/footer');
    }
}
