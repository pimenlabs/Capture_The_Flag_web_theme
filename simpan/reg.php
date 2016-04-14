<?php
	include'../conf/conf.php';
if (isset($_POST['username'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$team=$_POST['team'];
		

	if (empty($username)) {
		echo "<script>alert('username masih kosong');</script>";
		echo "<script>document.location.href = '../index.php';</script>";
	}

	elseif (empty($password)) 
	{
		echo "<script>alert('password masih kosong');</script>";
		echo "<script>document.location.href = '../index.php';</script>";
	}
	elseif (empty($email)) 
	{
	echo "<script>alert('email masih kosong');</script>";
	echo "<script>document.location.href = '../index.php';</script>";	
	}
	elseif (empty($team)) 
	{
	echo "<script>alert('team dari masih kosong');</script>";
	echo "<script>document.location.href = '../index.php';</script>";
	}

	
	else{
		$simpn=mysql_query("insert into reg values('$username','$password','$email','$team')");
		if ($simpn) {
		echo "<script>alert('Data berhasil di../index');</script>";
	echo "<script>document.location.href = '../index.php';</script>";	
		}
		else{
			echo "<script>alert('Data gagal di../index');</script>";
	echo "<script>document.location.href = '../index.php';</script>";
		}
	}
}	
?>
	