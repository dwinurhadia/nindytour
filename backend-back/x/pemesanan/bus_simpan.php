<?php 
		
	include "../../koneksi.php";

	$plat_no = $_POST["plat_no"];
	$nama_bus = $_POST["nama_bus"];
	$jenis_bus = $_POST["jenis_bus"];
	$jml_kursi = $_POST["jml_kursi"];
	$dataValid="YA";
	echo $jenis_bus;
	if(strlen(trim($plat_no))==0){
		echo "Nomor Polisi Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($nama_bus))==0){
		echo "Nama Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($jenis_bus))==0){
		echo "Jenis Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($jml_kursi))==0){
		echo "Kapasitas Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if($dataValid=="TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}

	$sql = "insert into bus (nama_bus, plat_no, jenis_bus, jml_kursi) values ('$nama_bus', '$plat_no', '$jenis_bus', $jml_kursi)";
	$hasil = mysqli_query($kon, $sql);
	
	if(!$hasil){
		echo "Gagal Simpan, silahkan diulangi! <br />";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}else{
		echo ("<script LANGUAGE='JavaScript'>
			window.alert('Data Berhasil Disimpan');
			window.location.href='index.php?page=bus_tampil';
			</script>");
	}
?>
<hr />