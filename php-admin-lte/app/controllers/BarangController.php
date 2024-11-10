<?php
    require_once 'app/model/barang.php';

    class BarangController{
        private $dataBarang;
        public function __construct($dbConnnection){
            $this->dataBarang = new Barang($dbConnnection);
        }

        public function index(){
            require 'app/view/viewHome.php';
        }

        public function showBarangList(){
            $data = $this->dataBarang->getAllBarang();
            require 'app/view/viewBarang.php';
        }

        public function deleteBarang($kode_barang){
            $data = $this->dataBarang->getDeleteBarang($kode_barang);
            header('location:barang.php');
        }

        public function addBarang(){            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $kode_barang = $_POST['kode_barang'];
                $nama_barang = $_POST['nama_barang'];
                $Harga = $_POST['harga'];
                $stok = $_POST['stok'];
        
                if ($this->dataBarang->getAddBarang($kode_barang, $nama_barang, $Harga, $stok)) {
                    header("Location: barang.php");
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }
            require 'app/view/formAddBarang.php';
        }

        public function updateBarang($kode_barang){
            $data = $this->dataBarang->getKodeBarang($kode_barang);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama_barang = $_POST['nama_barang'];
                $harga = $_POST['harga'];
                $Stok = $_POST['stok'];
        
                if ($this->dataBarang->getUpdateBarang($kode_barang, $nama_barang, $harga, $Stok)) {
                    header("Location: barang.php");
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }
            require 'app/view/formUpdateBarang.php';
        }
    }
?>