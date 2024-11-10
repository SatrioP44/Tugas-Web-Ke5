<?php
    require_once 'app/model/pelanggan.php';

    class PelangganController{
        private $dataPelanggan;

        public function __construct($dbConnection){
            $this->dataPelanggan = new Pelanggan($dbConnection);
        }

        public function showPelangganList(){
            $data = $this->dataPelanggan->getAllPelanggan();
            require 'app/view/viewPelanggan.php';
        }

        public function deletePelanggan($id_pelanggan){
            $data = $this->dataPelanggan->getDeletePelanggan($id_pelanggan);
            header('location:pelanggan.php');
        }

        public function addPelanggan(){            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Mengambil data dari form
                $id_pelanggan = $_POST['id_pelanggan'];
                $nama_pelanggan = $_POST['nama_pelanggan'];
                $alamat = $_POST['alamat'];
        
                // Memanggil metode updateUser dari model
                if ($this->dataPelanggan->getAddPelanggan($id_pelanggan, $nama_pelanggan, $alamat)) {
                    header("Location: pelanggan.php"); // Redirect setelah update
                } else {
                    $error = "Gagal mengupdate data.";
                }
            }

            require 'app/view/formAddPelanggan.php';
        }

        public function updatePelanggan($id_pelanggan){
            $data = $this->dataPelanggan->getKodePelanggan($id_pelanggan);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama_pelanggan = $_POST['nama_pelanggan'];
                $alamat = $_POST['alamat'];
        
                if ($this->dataPelanggan->getUpdatePelanggan($id_pelanggan, $nama_pelanggan, $alamat)) {
                    header("Location: pelanggan.php"); // Redirect setelah update
                } 
                else {
                    $error = "Gagal mengupdate data.";
                }
            }
            require 'app/view/formUpdatePelanggan.php';
        }
    }
?>