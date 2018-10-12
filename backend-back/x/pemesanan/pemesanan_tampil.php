<?php 
	$sql = "select * from pemesanan p
	join jadwal j on p.id_jadwal=j.id_jadwal
	join bus bs on j.id_bus=bs.id_bus
	left join bayar b on p.id_bayar=b.id_bayar
	join pemesan pm on p.id_pemesan=pm.id_pemesan
	order by id_pemesanan desc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manajemen Pemesanan</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				DATA PEMESANAN
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<p>
					<a href="index.php?page=pemesanan_isi" class="btn btn-outline btn-success"><i class="fa fa-plus"></i> Tambah</a>
					<button type="button" class="btn btn-outline btn-info"><i class="fa fa-search"></i></button>
				</p>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>No</th>
							<th>Rute</th>
							<th>Tgl Berangkat</th>
							<th>Bus</th>
							<th>Pemesan</th>
							<th>Diskon</th>
							<th>Status Bayar</th>
							<th>Konfirmasi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							while ($row=mysqli_fetch_assoc($hasil)){
								echo "<tr>";
								echo "  <td>".$no."</td>";
								echo "  <td>".$row['rute_perjalanan']."</td>";
								echo "  <td>".$row['tgl_berangkat']."</td>";
								echo "  <td>".$row['nama_bus']."</td>";
								echo "  <td>".$row['nama_pemesan']."</td>";
								echo '  <td><span class="badge">0%</span></td>';
								echo ' <td><span class="label label-warning">Belum Bayar</span></td>';
								echo '  <td> <a href="index.php?page=bus_edit&id_bus='.$row['id_bus'].'"><i class="fa fa-check"></i></a> <a href="index.php?page=bus_hapus&id_bus='.$row['id_bus'].'"><i class="fa fa-remove"></a></i></td>';
								echo "</tr>";
								$no++;
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