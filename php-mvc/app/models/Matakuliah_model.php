<?php

class Matakuliah_model
{
    private $table = 'matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatakuliah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function cariDataMatakuliah()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM matakuliah WHERE nama_matakuliah LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
