<?php 
		
	include "../koneksi.php";

	$rute_perjalanan = $_POST["rute_perjalanan"];
	$tgl_berangkat = $_POST["tgl_berangkat"];
	$id_bus = $_POST["id_bus"];
	// $jenis_bus = $_POST["jenis_bus"];
	// $jml_kursi = $_POST["jml_kursi"];
	$dataValid="YA";
	echo $id_bus;
	if(strlen(trim($rute_perjalanan))==0){
		echo "Rute Perjalanan Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($tgl_berangkat))==0){
		echo "Tanggal Berangkat Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	
	if(strlen(trim($id_bus))==0){
		echo "ID bus Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	// if(strlen(trim($jenis_bus))==0){
	// 	echo "Jenis Harus Diisi! <br />";
	// 	$dataValid = "TIDAK";
	// }
	
	// if(strlen(trim($jml_kursi))==0){
	// 	echo "Kapasitas Harus Diisi! <br />";
	// 	$dataValid = "TIDAK";
	// }
	
	if($dataValid=="TIDAK"){
		echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>";
		echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}

	$sql = "insert into jadwal (rute_perjalanan, tgl_berangkat, id_bus) values ('$rute_perjalanan', '$tanggal_berangkat','$id_bus')";
	$hasil = mysqli_query($kon, $sql);
	
	if(!$hasil){
		echo "Gagal Simpan, silahkan diulangi! <br />";
		echo mysqli_error($kon);
		echo "<br/> <input type='button' value='Kembali' onClick='self.history.back()'>";
		exit;
	}else{
		echo "Simpan data berhasil";
		echo "<script>
				window.location = '../index.php?page=jadwal_tampil';
			</script>";
	}
?>
<hr />