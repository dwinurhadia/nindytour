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
			   Tambah Data Jadwal
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="backend/jadwal_simpan.php" method="post">
							<div class="form-group">
								<label>Rute Perjalanan</label>
								<input type="text" name="rute_perjalanan" class="form-control" />
							</div>
							<div class="form-group">
								<label>Tanggal berangkat</label>
								<input type="text" name="tgl_berangkat" class="form-control" />
							</div>
							<div class="form-group">
								<label>Id bus</label>
								<input type="text" name="id_bus" class="form-control" />
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