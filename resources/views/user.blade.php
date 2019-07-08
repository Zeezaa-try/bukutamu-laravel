<html>
<head><title>Aplikasi Buku Tamu</title></head>
<body>
	<center>
	<h1>SELAMAT DATANG</h1>
	<h2>Masukan Nama Anda: </h2>

	<form action="/user/datang" method="post">
		{{csrf_field()}}
		<input type = "text" name="nama" required="required">
		<br><br>
		<input type="submit" value="Register">
	</form>
</center>
</body>
</html>