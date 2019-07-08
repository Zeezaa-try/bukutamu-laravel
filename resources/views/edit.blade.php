<html>
<head><title>Aplikasi Buku Tamu</title></head>
<body>
	<h1>SELAMAT DATANG</h1>
	<h2>Masukan Nama Anda: </h2>


	<a href="/admin">Kembali ke daftar tamu</a>


	@foreach($bukutamu as $bt)
<form action="/admin/edit" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $bt -> id }}"> <br/>
	Nama <input type="text" required="required" name="nama" value="{{ $bt->name }}"> <br/>
	Jam Datang <input type="timestamp" required="required" name="jam" value="{{ $bt->time}}"> <br/>
	<input type="submit" value="Simpan Data">
</form>
@endforeach

</body>
</html>