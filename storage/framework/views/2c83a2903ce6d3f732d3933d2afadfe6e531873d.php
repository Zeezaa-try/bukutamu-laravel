<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('css/datatables.boostrap.css')); ?>">
	<script src="<?php echo e(url('js/jquery.dataTables.min.js')); ?>"></script>
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
		<?php $__currentLoopData = $bukutamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php $no++; ?>
		<tr>
			<td><?php echo e($no); ?></td>
			<td><?php echo e($bt->name); ?></td>
			<td><?php echo e($bt->time); ?></td>
			<td>
				<a href="/admin/edit/<?php echo e($bt -> id); ?>">Edit</a>
				|
				<a href="/admin/hapus/<?php echo e($bt-> id); ?>">Hapus</a>
			</td>
		</tr>
		
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 </center>
</body>
</html><?php /**PATH C:\laragon\www\iqbal-laravel\resources\views/admin.blade.php ENDPATH**/ ?>