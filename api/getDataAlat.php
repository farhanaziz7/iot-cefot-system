<?php 
	include('connection.php');

	$query = "SELECT * FROM alat";
	$result = mysqli_query($koneksi,$query);
	$row = mysqli_fetch_assoc($result);

	$pMin = $row['berat_min'];
	$pMax = $row['berat_max'];
	$sMin = $row['suhu_min'];
	$sMax = $row['suhu_max'];

 ?>