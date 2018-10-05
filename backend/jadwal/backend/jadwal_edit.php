<?php 
	$id_jadwal=$_GET['id_jadwal'];
	$query_mysql = mysqli_query($kon, "SELECT * FROM jadwal WHERE id_jadwal=$id_jadwal")or die(mysql_error());
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
			   <i class="fa fa-pencil"></i> Ubah Data jadwal
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<?php
							while($data = mysqli_fetch_array($query_mysql)){
						?>
						<form role="form" action="index.php?page=jadwal_edit_save" method="post">
							<input type="hidden" name="id_jadwal" value="<?php echo $data['id_jadwal'] ?>">
							<div class="form-group">
								<label>Rute</label>
								<input type="text" name="rute_perjalanan" class="form-control" value="<?php echo $data['rute_perjalanan'] ?>" />
							</div>
							<div class="form-group">
								<label>Tanggal</label>
								<input type="text" name="tgl_berangkat" class="form-control" value="<?php echo $data['tgl_berangkat'] ?>" />
							</div>
							
							<div class="form-group">
								<label>Id Bus</label>
								<input type="text" name="id_bus" class="form-control" value="<?php echo $data['id_bus'] ?>" />
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
						<?php } ?>
					</div>
				</div>
				<!-- /.row (nested) -->
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->