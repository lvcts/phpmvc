<?php

class Matakuliah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Matakuliah';
        $data['mk'] = $this->model('Matakuliah_model')->getAllMatakuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Matakuliah';
        $data['mk'] = $this->model('Matakuliah_model')->cariDataMatakuliah();
        $this->view('templates/header', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }
}
