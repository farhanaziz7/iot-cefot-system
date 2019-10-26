<?php
	include('connection.php'); 
	$query = "SELECT `suhu` as value,SUBSTRING(date,12,8) as label FROM `log_second` GROUP BY date DESC LIMIT 10";
	$result = mysqli_query($koneksi,$query);

	$array = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}

	$array = array_reverse($array);

	echo json_encode($array);
?>