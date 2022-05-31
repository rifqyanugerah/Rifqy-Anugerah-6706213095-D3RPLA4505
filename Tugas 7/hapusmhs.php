<!DOCTYPE html>
<html>
<head>
	<title>Hapus Mahasiswa-2062</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation" class="active"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" name="nim">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="hapus">Hapus Mahasiswa</button>
					</div>
  				</div>
			</form>
			<?php

				include 'config.php';

				if (isset($_POST['hapus']))
				{
					$nim 	= $_POST['nim'];

					$query 	= "DELETE FROM mahasiswa WHERE nim = '$nim'";
					$result = mysqli_query($conn, $query);

					if ($result)
					{
						echo "	<script>
									alert('Data berhasil dihapus!');
								</script>
						";
					}
					else
					{
						echo "	<script>
									alert('Data gagal dihapus!');
								</script>
						";
					}
				}
				
			?>
		</div>
	</div>
</body>
</html>