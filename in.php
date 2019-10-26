<?php
	require 'api/connection.php';
	$uname=$_POST['username'];
	$pass=$_POST['password'];

	$sql = "SELECT * FROM pengguna 
			WHERE username='".$uname."' AND 
			password='".$pass."'";
	
	$result = mysqli_query($koneksi, $sql);
	
	$check = mysqli_num_rows($result);
	
	if($check) {
		session_start();
		
		$row = mysqli_fetch_assoc($result);
		
		$_SESSION['u'] = $row['username'];
		$_SESSION['p'] = $row['password'];
		
		header('Location: index.php');
	}
	else {
	
		echo "
		<p align=\"center\">Wrong username or password</p>
		<center><a href=\"index.php\"><button>Back to Home</button></a></center>
		";
		
	}
?>