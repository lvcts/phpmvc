<?php

class Mkmahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Matakuliah';
        $data['mkmhs'] = $this->model('Mkmahasiswa_model')->getAllMkmahasiswa();
        $this->view('templates/header', $data);
        $this->view('mkmahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Matakuliah';
        $data['mkmhs'] = $this->model('Mkmahasiswa_model')->cariDataMkmahasiswa();
        $this->view('templates/header', $data);
        $this->view('mkmahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
