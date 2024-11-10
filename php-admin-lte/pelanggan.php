<?php
    require_once 'config/database.php';
    require_once 'app/controllers/PelangganController.php';

    $dbConnection = getDBConnection();

    $PelangganController = new PelangganController($dbConnection);
    if (isset($_GET['pelanggan'])) {
        switch ($_GET['pelanggan']) {
            case 'AddPelanggan':
                $PelangganController->addPelanggan();
                break;
            case 'UpdatePelanggan':
                $id_pelanggan = isset($_GET['id_pelanggan']) ? ($_GET['id_pelanggan']) : '';
                $PelangganController->updatePelanggan($id_pelanggan);
                break;
            case 'DeletePelanggan':
                $id_pelanggan = isset($_GET['id_pelanggan']) ? ($_GET['id_pelanggan']) : '';
                $PelangganController->deletePelanggan($id_pelanggan);
                break;
            default:
                $PelangganController->showPelangganList();
                break;
        }
    } 
    else {
        $PelangganController->showPelangganList();
    }
?>