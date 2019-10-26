<?php 
	include('../api/connection.php');
	date_default_timezone_set("Asia/Jakarta");
	$date = date("Y-m-d H:i",Time());

	echo "Waktu Saat Ini : " . $date;

	echo "<p><p>";
	$query = "SELECT ROUND(AVG(suhu)) AS rata, SUM(stok_keluar) AS TOTAL_STOCK,SUBSTRING(date,1,16) as datex FROM log_second 
		WHERE date NOT LIKE '$date%'
		GROUP BY datex DESC" ;


	echo $query;
	echo "<br>";
	$result = mysqli_query($koneksi,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		$datex = $row['datex'];
		$query2 = "SELECT berat,date FROM log_second WHERE date LIKE '$datex%' GROUP BY date DESC";
		$result2 = mysqli_query($koneksi,$query2);
		$row2 = mysqli_fetch_assoc($result2);

		$berat_terakhir = $row2['berat'];
		$suhu_rata = $row['rata'];
		$total_stock = $row['TOTAL_STOCK'];

		
	//	echo $datex . " - " . $suhu_rata . " - " . $total_stock . " - " . $berat_terakhir;


		$query_insert = "INSERT INTO `log_minute`(`date`, `suhu`, `berat_terakhir`, `stok_keluar`) VALUES ('$datex',$suhu_rata,$berat_terakhir,$total_stock)";
		mysqli_query($koneksi,$query_insert);



	//	echo "<br>";
	}


	$query_delete = "DELETE FROM log_second WHERE date NOT LIKE '$date%'";
	echo $query_delete;
	mysqli_query($koneksi,$query_delete);

 ?>