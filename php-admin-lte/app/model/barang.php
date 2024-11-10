<?php
class Barang{
    private $db;
    public function __construct($dbConnection){
        $this->db=$dbConnection;
    }

    public function getAllBarang(){
        $stmt = $this->db->prepare("SELECT * FROM barang");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getDeleteBarang($kode_barang){
        $stmt = $this->db->prepare("DELETE FROM barang WHERE kode_barang = :kode_barang");
        $stmt->bindParam(':kode_barang', $kode_barang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUpdateBarang($kode_barang, $nama_barang, $harga,$stok){
        $stmt = $this->db->prepare("UPDATE barang SET `nama_barang` = :nama_barang, `harga` = :harga , `stok` = :stok WHERE `kode_barang` = :kode_barang");
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':kode_barang', $kode_barang);
        return $stmt->execute();
    }

    public function getAddBarang($kode_barang, $nama_barang, $harga, $stok){
        $stmt = $this->db->prepare("INSERT INTO barang (kode_barang, nama_barang, harga, stok) VALUES (:kode_barang, :nama_barang, :harga, :stok)");
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':kode_barang', $kode_barang);
        return $stmt->execute();
    }

    public function getKodeBarang($kode_barang){
        $stmt = $this->db->prepare("SELECT * FROM barang WHERE kode_barang = :kode_barang");
        $stmt->bindParam(':kode_barang', $kode_barang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>