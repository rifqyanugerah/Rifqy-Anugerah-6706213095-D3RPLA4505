<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data-2062</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php include("config.php");?>
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation" class="active"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
				    <div class="col-sm-10">
				      <select class="form-control" name="data">
						  <option value="mahasiswa">Data Mahasiswa</option>
						  </select>
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="submit">Lihat Data</button>
					</div>
  				</div>
			</form>
			<?php
				
				include 'config.php';

				if (isset($_POST['submit']))
				{
					$data 	= $_POST['data'];

					$query 	= "SELECT * FROM $data";
					$result = mysqli_query($conn, $query);

					$i 		= 1;

					if ($data == "mahasiswa")
					{
			?>

			<table class="table">
				<tr>
					<th>No.</th>
					<th>Id Mahasiswa</th>
					<th>NIM</th>
					<th>Nama</th>
				</tr>

				<?php foreach ($result as $mhs): ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $mhs['id_mhs'] ?></td>
						<td><?php echo $mhs['nim'] ?></td>
						<td><?php echo $mhs['nama'] ?></td>
					</tr>
				<?php endforeach ?>
			</table>

			<?php 

						$i++; 
					}
				}

			?>

		</div>
	</div>
</body>
</html>