<?php

session_start();
if (isset($_POST['login'])) 
{
	include "koneksi.php";

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	if (empty($email) || empty($pass)) 
	{
		header("location:index.php?error_login");
	}
	else
	{
		$sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$pass'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1)
		{
			header("location:index.php?error_login");
		}
		else
		{
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		      $id = $row['ID_Pembeli'];
		   	}
			$sql2 = "SELECT user.ID_Pembeli,tbl_pembeli.Nama_Pembeli as Nama from user
    				JOIN tbl_pembeli ON tbl_pembeli.ID_Pembeli = user.ID_Pembeli WHERE user.ID_Pembeli = $id";
			$result2 = mysqli_query($conn, $sql2);
			$resultCheck2 = mysqli_num_rows($result2);
			if($resultCheck2 < 1)
			{
				header("location:index.php?error_login_data_not_found");
			}
			else
			{
				while($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
			      $nama = $row2['Nama'];
			   	}
			   	$_SESSION['Nama'] = $nama;
				$_SESSION['Email'] = $email;
				header("location: ../Tubes-BasDat/login.php?login=success");
				exit();
			}
		}
	}
}
