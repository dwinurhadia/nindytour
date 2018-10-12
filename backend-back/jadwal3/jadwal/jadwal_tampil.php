<?php 
	$rute_perjalanan = "";
	if(isset($_POST["rute_perjalanan"]))
		$rute_perjalanan = $_POST["rute_perjalanan"];
	
	$sql = "select * from jadwal where rute_perjalanan like '%".$rute_perjalanan."%'order by id_jadwal desc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manajemen Jadwal</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				DATA Jadwal
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<p>
					<a href="index.php?page=jadwal_isi" class="btn btn-outline btn-success"><i class="fa fa-plus"></i> Tambah</a>
					<button type="button" class="btn btn-outline btn-info"><i class="fa fa-search"></i></button>
				</p>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Rute Perjalanan</th>
							<th>Tanggal berangkat</th>
							<th>Id Bus</th>
							<!-- <th>Aksi</th> -->
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 0;
							while ($row=mysqli_fetch_assoc($hasil)){
								echo "<tr>";
								echo "  <td>".$row['id_jadwal']."</td>";
								echo "  <td>".$row['rute_perjalanan']."</td>";
								echo "  <td>".$row['tgl_berangkat']."</td>";
								echo "  <td>".$row['id_bus']."</td>";
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