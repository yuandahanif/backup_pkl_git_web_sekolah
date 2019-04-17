<?php
class ambil_berita{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function pagination()
    {
        $this->db->prepare("SELECT * FROM berita");
        $this->db->execute();
        $jumlahberita = $this->db->rowCount();
        return ceil($jumlahberita / 6);
    }
    public function list_berita($p)
    {
        $awaldata = ($p * 6) - 6;
        $this->db->prepare("SELECT * FROM berita ORDER BY id_berita DESC LIMIT :page ,6");
        $this->db->bind('page',$awaldata);
        return $this->db->queryAll();
    }
    public function beritaBy($id)
    {
        $this->db->prepare("SELECT * FROM berita WHERE id_berita = :id");
        $this->db->bind('id',$id);
        return $this->db->queryOne();
    }
}
