<?php 
	$id_bus=$_GET['id_bus'];
	$query_mysql = mysqli_query($kon, "SELECT * FROM bus WHERE id_bus=$id_bus")or die(mysql_error());
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
			   <i class="fa fa-pencil"></i> Ubah Data Bus
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<?php
							while($data = mysqli_fetch_array($query_mysql)){
						?>
						<form role="form" action="index.php?page=bus_edit_save" method="post">
							<input type="hidden" name="id_bus" value="<?php echo $data['id_bus'] ?>">
							<div class="form-group">
								<label>No. Polisi</label>
								<input type="text" name="plat_no" class="form-control" value="<?php echo $data['plat_no'] ?>" />
							</div>
							<div class="form-group">
								<label>Nama Bus</label>
								<input type="text" name="nama_bus" class="form-control" value="<?php echo $data['nama_bus'] ?>" />
							</div>
							<div class="form-group">
								<label>Jenis Bus</label>
								<select class="form-control" name="jenis_bus">
									
									<option value="Ekspres" <?php echo ($data['jenis_bus'] == 'Ekspres')?'selected':''?>>Ekspres</option>
									<option value="Bisnis" <?php echo ($data['jenis_bus'] == 'Bisnis')?'selected':''?>>Bisnis</option>
									<option value="Ekonomi" <?php echo ($data['jenis_bus'] == 'Ekonomi')?'selected':''?>>Ekonomi</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kapasitas</label>
								<input type="text" name="jml_kursi" class="form-control" value="<?php echo $data['jml_kursi'] ?>" />
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