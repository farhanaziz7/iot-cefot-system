<?php 
	include('../api/connection.php');

	$stock = $_POST['stock'];

	$query = "SELECT * from alat";
	$result = mysqli_query($koneksi,$query);
	$stock_lama = mysqli_fetch_assoc($result)['stok'];

	$stock_baru = $stock_lama + $stock;

	$query = "UPDATE alat SET stok=$stock_baru";
	mysqli_query($koneksi,$query);

	header("Location: tambah.html");

?>