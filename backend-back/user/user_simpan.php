<?php 
		
	include "../koneksi.php";

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$level = $_POST["level"];
	
	// $jenis_bus = $_POST["jenis_bus"];
	// $jml_kursi = $_POST["jml_kursi"];
	$dataValid="YA";
	
	if(strlen(trim($username))==0){
		echo "Username Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($password))==0){
		echo "Passwod Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($email))==0){
		echo "Email Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}

	if(strlen(trim($level))==0){
		echo "Level Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	// if(strlen(trim($jml_kursi))==0){
	// 	echo "Kapasitas Harus Diisi! <br />";
	// 	$dataValid = "TIDAK";
	// }
	
	if($dataValid=="TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}

	$sql = "insert into user (username, password, email, level) values ('$username', '$password','$email','$level')";
	$hasil = mysqli_query($kon, $sql);
	
	if(!$hasil){
		echo "Gagal Simpan, silahkan diulangi! <br />";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}else{
		echo "Simpan data berhasil";
		echo "<script>
				window.location = '../index.php?page=user_tampil';
			</script>";
	}
?>
<hr />