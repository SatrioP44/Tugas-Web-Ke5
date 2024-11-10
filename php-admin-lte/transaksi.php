<?php
    require_once 'config/database.php';
    require_once 'app/controllers/TransaksiController.php';

    $dbConnection = getDBConnection();

    $TransaksiController = new TransaksiController($dbConnection);
    if (isset($_GET['transaksi'])) {
        switch ($_GET['transaksi']) {
            case 'AddTransaksi':
                $TransaksiController->addTransaksi();
                break;
            default:
                $TransaksiController->showTransaksiList();
                break;
        }
    } 
    else {
        $TransaksiController->showTransaksiList();
    }
?>