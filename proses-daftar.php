<?php 
if(isset($_POST['daftar'])){
	require_once('koneksi.php');

	$user = $_POST['user'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telf = $_POST['telf'];

	$sql = "SELECT * FROM user WHERE Email = '$user'";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck < 1)
	{
		$sql2 = "INSERT INTO `tbl_pembeli`(`Nama_Pembeli`, `Alamat_Pembeli`, `Telp`) VALUES ('$nama','$alamat','$telf')";

		if($result2 = mysqli_query($conn,$sql2))
		{
			$sql3 = "SELECT max(ID_Pembeli) FROM tbl_pembeli";
			$result3 = mysqli_query($conn,$sql3);
			$resultCheck3 = mysqli_num_rows($result3);

			if($resultCheck3 < 1)
			{
				header("location:Form-DataDiri.php?err4");
			}
			else
			{
				while($row = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
		      		$id = $row['max(ID_Pembeli)'];
		   		}

		   		$sql4 = "INSERT INTO  user VALUES ('$user','$password','$id')";

		   		if($result4 = mysqli_query($conn,$sql4))
		   		{
		   			header("location:index.php?sukses_daftar");
		   		}
		   		else
		   		{
		   			header("location:Form-DataDiri.php?err5");
		   		}
			}
		}
		else
		{
			header("location:Form-DataDiri.php?err3");
		}
	}
	else
	{
		header("location:Form-DataDiri.php?err2");
	}
}
?> 