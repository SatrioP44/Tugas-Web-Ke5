<?php
    require_once 'app/model/transaksi.php';

    class TransaksiController{
        private $dataTransaksi;

        public function __construct($dbConnection){
            $this->dataTransaksi = new Transaksi($dbConnection);
        }

        public function showTransaksiList(){
            $data = $this->dataTransaksi->getAllTransaksi();
            require 'app/view/viewTransaksi.php';
        }

        public function addTransaksi(){            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama_pelanggan = $_POST['nama_pelanggan'];
                $nama_barang = $_POST['nama_barang'];
                $jumlah = $_POST['jumlah'];
        
                if ($this->dataTransaksi->getAddTransaksi($nama_pelanggan, $nama_barang, $jumlah)) {
                    header("Location: transaksi.php");
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }

            require 'app/view/formAddTransaksi.php';
        }

    }
?>