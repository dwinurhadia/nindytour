<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Manajemen User</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			   Tambah Data User
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" action="backend/user_simpan.php" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" />
							</div>
							<div class="form-group">
								<label>Level</label>
								<input type="text" name="level" class="form-control" />
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