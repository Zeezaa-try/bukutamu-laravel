<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/datatables.boostrap.css')}}">
	<script src="{{url('js/jquery.dataTables.min.js')}}"></script>
</head>
<body>
	<center>
	<h1>Data Pengunjung</h1>
 	
	<table id="table" class="table-user" border="3"> 
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Tanggal dan Waktu Datang</th>
			<th>Opsi</th>
		</tr>
	
		<?php $no = 0; ?>
		@foreach($bukutamu as $bt )
		<?php $no++; ?>
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $bt->name }}</td>
			<td>{{ $bt->time}}</td>
			<td>
				<a href="/admin/edit/{{ $bt -> id }}">Edit</a>
				|
				<a href="/admin/hapus/{{ $bt-> id }}">Hapus</a>
			</td>
		</tr>
		
		@endforeach
	</table>
 </center>
</body>
</html>