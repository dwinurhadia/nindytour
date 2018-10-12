<?php 
		
	//include "../../koneksi.php";
	$id_jadwal = $_POST["id_jadwal"];
	$rute_perjalanan = $_POST["rute_perjalanan"];
	$tgl_berangkat = $_POST["tgl_berangkat"];
	
	$dataValid="YA";
	echo $id_jadwal;
	if(strlen(trim($rute_perjalanan))==0){
		echo "Rute Harus Diisi! <br />";
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
	
	$sql = "update bus set nama_bus='".$nama_bus."', plat_no='".$plat_no."', jenis_bus='".$jenis_bus."', jml_kursi=".$jml_kursi." where id_bus=".$id_bus."";
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