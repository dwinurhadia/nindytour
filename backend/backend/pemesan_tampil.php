<?php 
	$nama_pemesan = "";
	if(isset($_POST["pemesan"]))
		$nama_pemesan = $_POST[""];
	
	$sql = "select * from pemesan where nama_pemesan like '%".$nama_pemesan."%'order by id_pemesan asc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manajemen Pemesan</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Detail User
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<p>
					<a href="index.php?page=pemesan_isi" class="btn btn-outline btn-success"><i class="fa fa-plus"></i> Tambah</a>
					<button type="button" class="btn btn-outline btn-info"><i class="fa fa-search"></i></button>
				</p>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Pemesan</th>
							<th>No KTP</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>ID User</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 0;
							while ($row=mysqli_fetch_assoc($hasil)){
								echo "<tr>";
								echo "  <td>".$row['id_pemesan']."</td>";
								echo "  <td>".$row['nama_pemesan']."</td>";
								echo "  <td>".$row['no_ktp']."</td>";
								echo "  <td>".$row['tempat_lahir']."</td>";
								echo "  <td>".$row['tgl_lahir']."</td>";
								echo "  <td>".$row['alamat']."</td>";
								echo "  <td>".$row['id_user']."</td>";
								echo '  <td> <i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>';
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				<!-- /.table-responsive -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>