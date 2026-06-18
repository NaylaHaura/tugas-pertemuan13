

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="text-center">
        <div class="d-flex justify-content-center mb-4">
            <div style="
                padding: 15px; 
                border: 10px solid #133a46; 
                border-radius: 5px; 
                box-shadow: 0 10px 20px rgba(0,0,0,0.3);
                display: inline-block;">
                
                <img src="<?php echo e(asset('gambar/foto.jpg')); ?>" 
                     alt="PT L'Essential" 
                     style="width: 700px; height: 400px; object-fit: cover; display: block;">
            </div>
        </div>

        <h1 class="text-center text-toska-gelap fw-bold mb-4">Selamat Datang di PT L'Essential</h1>
        <p>Kami berkomitmen untuk memberikan pelayanan terbaik bagi kesehatan kulit Anda</p>
        <a class="btn btn-primary btn-lg" href="/products" role="button">Lihat Produk</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/pages/home.blade.php ENDPATH**/ ?>