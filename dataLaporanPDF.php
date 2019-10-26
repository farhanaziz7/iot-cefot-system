<?php 
	include('api/connection.php');
	require_once 'tcpdf/tcpdf.php';
	$tcpdfku = new TCPDF("P");
	$tcpdfku->AddPage();

	$query = "SELECT SUBSTRING(date,1,10) as Tanggal, SUBSTRING(date,12,5) as Waktu, `Stok_Keluar` as Stok_Keluar FROM `log_minute` GROUP BY date DESC LIMIT 10";
	$result = mysqli_query($koneksi,$query);

 	$html = "
		<html>
		<head>
			<link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\" integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
		</head>
		<body>
			<div class=\"card\">
		  		<div class=\"card-body\">
		  			<h1 style=\"text-align: center;\">CEFOT</h1>
		  			<br>
					<h3>Laporan Pakan 10 Menit Terakhir</h3>
					<br>
					<table border=\"1\">
						<tr>
							<th style=\"text-align: center;\">No</th>
							<th style=\"text-align: center;\">Tanggal</th>
							<th style=\"text-align: center;\">Waktu</th>
							<th style=\"text-align: center;\">Stok_Keluar</th>
						</tr>";
	$str_db = "";
	$no = 1;
	while($row = mysqli_fetch_assoc($result)){
		$str_db .='
		<tr style="text-align: center;">
			<td style="text-align: center;">'.$no.'</td>
			<td style="text-align: center;">'.$row['Tanggal'].'</td>
			<td style="text-align: center;">'.$row['Waktu'].'</td>
			<td style="text-align: center;">'.$row['Stok_Keluar'].'</td>
		</tr>';
		$no++;
	}
	$html = $html.$str_db."
			</table>
				</div>
			</div>
			<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
			<script src=\"https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js\" integrity=\"sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U\" crossorigin=\"anonymous\"></script>
			<script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\" integrity=\"sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9\" crossorigin=\"anonymous\"></script>
		</body>
		</html>";
	
	$tcpdfku->WriteHTMLCell(0,0,10,10,$html);
	ob_clean();
	$tcpdfku->Output('LaporanPakanCEFOT.pdf','D');

?> 