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
			   Tambah Data Bus
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="index.php?page=bus_simpan" method="post">
							<div class="form-group">
								<label>No. Polisi</label>
								<input type="text" name="plat_no" class="form-control" />
							</div>
							<div class="form-group">
								<label>Nama Bus</label>
								<input type="text" name="nama_bus" class="form-control" />
							</div>
							<div class="form-group">
								<label>Jenis Bus</label>
								<select class="form-control" name="jenis_bus">
									<option value="Ekspres">Ekspres</option>
									<option value="Bisnis">Bisnis</option>
									<option value="Ekonomi">Ekonomi</option>
								</select>
							</div>
							<div class="form-group">
								<label>Kapasitas</label>
								<input type="text" name="jml_kursi" class="form-control" />
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
							<button type="reset" class="btn btn-default">Reset</button>
						</form>
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