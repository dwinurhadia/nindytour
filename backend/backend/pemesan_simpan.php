<?php 
		
	include "../koneksi.php";

	$nama_pemesan = $_POST["nama_pemesan"];
	$no_ktp = $_POST["no_ktp"];
	$tempat_lahir = $_POST["tempat_lahir"];
	$tgl_lahir = $_POST["tgl_lahir"];
	
	$alamat = $_POST["alamat"];
	$id_user = $_POST["id_user"];
	
	$dataValid="YA";
	
	if(strlen(trim($nama_pemesan))==0){
		echo "nama Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($no_ktp))==0){
		echo "Passwod Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($tempat_lahir))==0){
		echo "tempat_lahir Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}

	if(strlen(trim($tgl_lahir))==0){
		echo "tgl_lahir Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($alamat))==0){
		echo "Alamat Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
		
	if(strlen(trim($id_user))==0){
		echo "ID user Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}

	if($dataValid=="TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}

	$sql = "insert into pemesan (nama_pemesan, no_ktp, tempat_lahir, tgl_lahir, alamat, id_user) values ('$nama_pemesan', '$no_ktp','$tempat_lahir','$tgl_lahir','$alamat','$id_user')";
	$hasil = mysqli_query($kon, $sql);
	
	if(!$hasil){
		echo "Gagal Simpan, silahkan diulangi! <br />";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}else{
		echo "Simpan data berhasil";
		echo "<script>
				window.location = '../index.php?page=pemesan_tampil';
			</script>";
	}
?>
<hr />