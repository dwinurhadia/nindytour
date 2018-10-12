<?php 
	$sql = "select * from bus order by id_bus desc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manajemen Bus</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				DATA BUS
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<p>
					<a href="index.php?page=bus_isi" class="btn btn-outline btn-success"><i class="fa fa-plus"></i> Tambah</a>
					<button type="button" class="btn btn-outline btn-info"><i class="fa fa-search"></i></button>
				</p>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>No. Pol</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Kapasitas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 0;
							while ($row=mysqli_fetch_assoc($hasil)){
								echo "<tr>";
								echo "  <td>".$row['plat_no']."</td>";
								echo "  <td>".$row['nama_bus']."</td>";
								echo "  <td>".$row['jenis_bus']."</td>";
								echo "  <td>".$row['jml_kursi']."</td>";
								echo '  <td> <a href="index.php?page=bus_edit&id_bus='.$row['id_bus'].'"><i class="fa fa-pencil"></i></a> <a href="index.php?page=bus_hapus&id_bus='.$row['id_bus'].'"><i class="fa fa-trash"></a></i></td>';
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