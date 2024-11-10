<?php 
require_once 'config/database.php';
require_once 'app/controllers/BarangController.php';
require_once 'app/controllers/PelangganController.php';
require_once 'app/controllers/TransaksiController.php';

$dbConnection = getDBConnection();

if (isset($_GET['navbar'])) {
    switch ($_GET['navbar']) {
        case 'Barang':
            $BarangController = new BarangController($dbConnection);
            $BarangController->showBarangList();
            break;
        case 'Pelanggan':
            $PelangganController = new PelangganController($dbConnection);
            $PelangganController->showPelangganList();
            break;
        case 'Transaksi':
            $TransaksiController = new TransaksiController($dbConnection);
            $TransaksiController->showTransaksiList();
            break;
        default:
            $BarangController->index();
            break;
    }
} 
else {
    $BarangController = new BarangController($dbConnection);
    $BarangController->index();
}

?>