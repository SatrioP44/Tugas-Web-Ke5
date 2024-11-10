<?php
    require_once 'config/database.php';
    require_once 'app/controllers/BarangController.php';

    $dbConnection = getDBConnection();

    $BarangController = new BarangController($dbConnection);
    if (isset($_GET['barang'])) {
        switch ($_GET['barang']) {
            case 'AddBarang':
                $BarangController->addBarang();
                break;
            case 'UpdateBarang':
                $kode_barang = isset($_GET['kode_barang']) ? ($_GET['kode_barang']) : '';
                $BarangController->UpdateBarang($kode_barang);
                break;
            case 'DeleteBarang':
                $kode_barang = isset($_GET['kode_barang']) ? ($_GET['kode_barang']) : '';
                $BarangController->deleteBarang($kode_barang);
                break;
            default:
                $BarangController->showBarangList();
                break;
        }
    } 
    else {
        $BarangController->showBarangList();
    }
?>