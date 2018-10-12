<?php 
	$username = "";
	if(isset($_POST["username"]))
		$username = $_POST["username"];
	
	$sql = "select * from user where username like '%".$username."%'order by id_user asc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil)
		die("Gagal query..".mysqli_error($kon));
?>
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
				Detail User
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<p>
					<a href="index.php?page=user_isi" class="btn btn-outline btn-success"><i class="fa fa-plus"></i> Tambah</a>
					<button type="button" class="btn btn-outline btn-info"><i class="fa fa-search"></i></button>
				</p>
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>ID</th>
							<th>Username</th>
							<th>Password</th>
							<th>Email</th>
							<th>Level</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no = 0;
							while ($row=mysqli_fetch_assoc($hasil)){
								echo "<tr>";
								echo "  <td>".$row['id_user']."</td>";
								echo "  <td>".$row['username']."</td>";
								echo "  <td>".$row['password']."</td>";
								echo "  <td>".$row['email']."</td>";
								echo "  <td>".$row['level']."</td>";
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