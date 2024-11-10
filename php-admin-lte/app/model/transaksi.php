<?php
class Transaksi{
    private $db;

    public function __construct($dbConnection){
        $this->db=$dbConnection;
    }

    public function getAllTransaksi(){
        $stmt = $this->db->prepare("SELECT * FROM transaksi");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAddTransaksi($nama_pelanggan, $nama_barang, $jumlah){
        $stmt = $this->db->prepare("INSERT INTO transaksi (nama_pelanggan, nama_barang, jumlah) VALUES (:nama_pelanggan, :nama_barang, :jumlah)");
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':nama_barang', $nama_barang);
        $stmt->bindParam(':jumlah', $jumlah);
        return $stmt->execute();
    }

    public function getKodeTransaksi($id_pelanggan){
        $stmt = $this->db->prepare("SELECT * FROM pelanggan WHERE id_pelanggan = :id_pelanggan");
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>