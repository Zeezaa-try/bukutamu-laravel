<html>
<head><title>Aplikasi Buku Tamu</title></head>
<body>
	<h1>SELAMAT DATANG</h1>
	<h2>Masukan Nama Anda: </h2>


	<a href="/admin">Kembali ke daftar tamu</a>


	<?php $__currentLoopData = $bukutamu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="/admin/edit" method="post">
	<?php echo e(csrf_field()); ?>

	<input type="hidden" name="id" value="<?php echo e($bt -> id); ?>"> <br/>
	Nama <input type="text" required="required" name="nama" value="<?php echo e($bt->name); ?>"> <br/>
	Jam Datang <input type="timestamp" required="required" name="jam" value="<?php echo e($bt->time); ?>"> <br/>
	<input type="submit" value="Simpan Data">
</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\laragon\www\iqbal-laravel\resources\views//edit.blade.php ENDPATH**/ ?>