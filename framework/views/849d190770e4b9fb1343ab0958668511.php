<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h2 class="fw-bold mb-5 text-center text-toska-gelap">Galeri PT L'Essential</h2>

    <?php if($semua_galeri->isEmpty()): ?>
        <p class="text-center text-muted">Belum ada foto di galeri.</p>
    <?php else: ?>
    <div class="row g-4">
        <?php $__currentLoopData = $semua_galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-2">
            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                <img src="<?php echo e(asset('gambar/galeri/'.$item->gambar)); ?>" class="card-img-top" alt="<?php echo e($item->judul); ?>" style="height: 220px; object-fit: cover;">
                <div class="card-body">
                    <h6 class="fw-bold mb-1"><?php echo e($item->judul); ?></h6>
                    <?php if($item->keterangan): ?>
                        <p class="text-muted small mb-0"><?php echo e($item->keterangan); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/pages/galeri.blade.php ENDPATH**/ ?>