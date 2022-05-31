<!DOCTYPE html>
<html>
<head>
	<title>Update Mahasiswa-2062</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php include("config.php");?>
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation" class="active"><a href="update.php">Update</a></li>
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
				      <button type="submit" class="btn btn-success" name="submit">Cari Mahasiswa</button>
					</div>
  				</div>
			</form>

			
			<?php

				include 'config.php';

				if (isset($_POST['submit']))
				{
					$nim 	= $_POST['nim'];

					$query 	= "SELECT * FROM mahasiswa WHERE nim = '$nim'";
					$result = mysqli_query($conn, $query);
				
			?>

			<?php foreach ($result as $mhs): ?>
				
				<form class="form-horizontal" method="post">
					<input type="hidden" name="id_mhs" value="<?php echo $mhs['id_mhs'] ?>">
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" value="<?php echo $mhs['nim'] ?>" name="nim">
					    </div>
					</div>
					<div class="form-group">
					    <label for="inputEmail2" class="col-sm-2 control-label">Nama</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputEmail2" placeholder="Nama" value="<?php echo $mhs['nama'] ?>" name="nama">
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-success" name="update">Update</button>
						</div>
	  				</div>
				</form>

			<?php endforeach ?>

			<?php 

				}

			 ?>
			
		</div>
	</div>
	<?php
		
		include 'config.php';

		if (isset($_POST['update']))
		{
			$id 	= $_POST['id_mhs'];
			$nim 	= $_POST['nim'];
			$nama 	= $_POST['nama'];

			$query 	= "UPDATE mahasiswa SET nim = '$nim', nama = '$nama' WHERE id_mhs = '$id'";
			$result = mysqli_query($conn, $query);

			if ($result)
			{
				echo "	<script>
							alert('Data berhasil diubah!');
						</script>
				";
			}
			else
			{
				echo "	<script>
							alert('Data gagal diubah!');
						</script>
				";
			}
		}

	?>
</body>
</html>