<?php
header("Content-type: application/vnd-ms-excel-2007");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=LaporanPakan.xls");
 
include 'api/dataLaporanPakan.php';
?>