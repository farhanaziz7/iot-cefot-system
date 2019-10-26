<?php
	include('connection.php'); 
	$query = "SELECT `suhu` as value,SUBSTRING(date,12,8) as label FROM `log_second` GROUP BY date DESC LIMIT 1";
	$result = mysqli_query($koneksi,$query);

	$array = array();
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
?>