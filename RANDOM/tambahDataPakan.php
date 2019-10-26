<?php 
	include('../api/connection.php');
	date_default_timezone_set("Asia/Jakarta");

	$query1 = "SELECT * FROM `alat`";
	$result1 = mysqli_query($koneksi,$query1);
	$row1 = mysqli_fetch_assoc($result1);

	$suhu_min = $row1['suhu_min'];
	$suhu_max = $row1['suhu_max'];
	$berat_min = $row1['berat_min'];
	$berat_max = $row1['berat_max'];
	$stock = $row1['stok'];


	$query = "SELECT * FROM log_second GROUP BY date DESC LIMIT 1";
	$result = mysqli_query($koneksi,$query);
	$row = mysqli_fetch_assoc($result);

	$berat = $row['berat'];
	//$stock = $row['stok'];
	$suhu = $row['suhu'];
	$lampu = $row['lampu'];
	$kipas = $row['kipas'];



	if($lampu == 0 && $kipas == 0)
		$rand_suhu = rand(-8,8);
	else if ($lampu == 1)
		$rand_suhu = -1;
	else if($kipas == 1)
		$rand_suhu = 1;
	


	$date = date("Y-m-d H-i-s",Time());

	$suhu_new = $suhu - $rand_suhu;

	if($suhu_new < $suhu_min){
		$lampu_new = 1;
		$kipas_new = 0;
	}else if($suhu_new > $suhu_max){
		$lampu_new = 0;
		$kipas_new = 1;
	}
	else{
		$lampu_new = 0;
		$kipas_new = 0;
	}



	$rand_berat = rand(1,10);
	$berat_new = $berat - $rand_berat;
	
	$isi = $berat_max - $berat_new;

	if($berat_new < $berat_min && $stock >= $isi){	
		$berat_new += $isi;
		$stock_new = $stock -  $isi;
		$stock_keluar = $isi;
	}else if($stock < $isi){
		$berat_new = $berat_new + $stock;
		$stock_keluar = $stock;
		if($berat_new <= 0)
			$berat_new = 0;
		$stock_new = 0; 
	}
	else{
		$stock_new = $stock;
		$stock_keluar = 0;
	}



	$insert = "INSERT INTO `log_second`(`date`, `suhu`, `lampu`,`kipas`, `berat`, `stok_keluar`) VALUES ('$date',$suhu_new,$lampu_new,$kipas_new,$berat_new,$stock_keluar)";
	mysqli_query($koneksi,$insert);

	$update_stock = "UPDATE alat SET stok='$stock_new'";
	mysqli_query($koneksi,$update_stock);

	$arr = array();
	$arr['date'] = $date;
	$arr['suhu'] = $suhu_new;
	$arr['berat'] = $berat_new;
	$arr['stock'] = $stock_new; 
	$arr['lampu'] = $lampu_new; 
	$arr['kipas'] = $kipas_new; 

	echo json_encode($arr);

 ?>