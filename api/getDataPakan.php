<?php 
	include('connection.php');

	$query = "SELECT log_second.*, alat.stok FROM log_second JOIN alat GROUP BY date DESC LIMIT 1";
	$result = mysqli_query($koneksi,$query);
	$row = mysqli_fetch_assoc($result);
	
	echo json_encode($row);	

 ?>