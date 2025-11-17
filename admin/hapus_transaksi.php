<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM sewa WHERE id_sewa=$id");

header("Location: data_transaksi_admin.php");
?>
