<?php
	include('connection.php'); 
	$query = "SELECT `stok_keluar` as value,SUBSTRING(date,12,5) as label FROM `log_minute` GROUP BY date DESC LIMIT 10";
	$result = mysqli_query($koneksi,$query);

	$array = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}

	$array = array_reverse($array);

	echo json_encode($array);
?>