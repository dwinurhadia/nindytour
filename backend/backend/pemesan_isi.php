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
			   Tambah Data Pemesan
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="backend/pemesan_simpan.php" method="post">
							<div class="form-group">
								<label>Nama Pemesan</label>
								<input type="text" name="nama_pemesan" class="form-control" />
							</div>
							<div class="form-group">
								<label>No KTP</label>
								<input type="text" name="no_ktp" class="form-control" />
							</div>
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control" />
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" name="tgl_lahir" class="form-control" />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" />
							</div>
							<div class="form-group">
								<label>Id User</label>
								<input type="text" name="id_user" class="form-control" />
							</div>
							<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Simpan</button>
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