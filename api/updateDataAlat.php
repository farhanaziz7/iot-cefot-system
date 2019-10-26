<?php 
	include('connection.php');

	sleep(3);

	$pMin = $_POST['pMin'];
	$pMax = $_POST['pMax'];

	$query = "UPDATE alat SET berat_min=$pMin, berat_max=$pMax";
	$result = mysqli_query($koneksi,$query);

	$sMin = $_POST['sMin'];
	$sMax = $_POST['sMax'];

	$query2 = "UPDATE alat SET suhu_min=$sMin, suhu_max=$sMax";
	$result2 = mysqli_query($koneksi,$query2);

	header('Location: ../feed.php');

 ?>