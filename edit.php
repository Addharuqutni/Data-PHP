<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="input.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Edit data dari database</h2>

	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>
	<form action="edit-aksi.php" method="post">
		<table>
      <tr>
        <td>id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
