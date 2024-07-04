<!DOCTYPE html>
<html>
<head>
	<title>WEBSITE TOKO RENTAL BUKU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
	</script>
</head>
<body>
	<div class="header">
		<h1 style="color: blue;">SELAMAT DATANG</h1>
		<p style="text-shadow: 7px 7px 10px; color: red;"> Book Heaven</p>
		<p style="text-shadow: 7px 7px 10px; color: red;">Toko Rental Buku</p>
	</div>
	<div class="link">
		<hr>
	</div>
		<div class="column1">
			<div class="poin1">
				<h3 style="text-align: center;">Buku yang Tersedia</h3>
				<p>Harry Potter And The Order Of The Phoenix<br>
				Harry Potter And The Half Blood Prince<br>
				Harry Potter And The Deathly Hallows<br>
				Harry Potter And The Chamber Of Secrets<br>
				The Chronicles of Narnia<br>
				Le Petit Prince<br>
				The Song of Achilles<br>
				Student Hidjo<br>
				</p>
			</div>
			<div class="poin1">
				<h3 style="text-align: center;">Memesan</h3>
				<?php
				$nama = $nohp = $buku = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  $nama = test_input($_POST["nama"]);
				  $nohp = test_input($_POST["nohp"]);
				  $buku = test_input($_POST["buku"]);
				}
				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<table>
						<tr>
							<td>Nama :</td>
							<td><input type="text" name="nama"></td>
						</tr>
						<tr>
							<td>No Telepon :</td>
							<td><input type="text" name="nohp"></td>
						</tr>
						<tr>
							<td>Buku :</td>
							<td><textarea name="buku" rows="5" cols="40"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" value="Submit"></td>
						</tr>
					</table>  
				</form>
				<?php
					error_reporting(0);
					$fp= fopen("memesan.txt", "a+");
					$nama = $_POST['nama'];
					$nohp = $_POST['nohp'];
					$buku = $_POST['buku'];
					fputs($fp, "$nama|$nohp|$buku\n");
					fclose($fp);
				?>
		</div>
			</div>
		</div>
	</div>
</body>
</html>