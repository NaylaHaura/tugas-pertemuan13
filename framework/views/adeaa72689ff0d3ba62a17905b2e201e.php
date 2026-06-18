

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2 class="text-center text-toska-gelap fw-bold mb-5">Katalog Produk PT L'Essential</h2>
    
    <div class="row">
        <?php $__currentLoopData = $data_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow border-0 overflow-hidden">
                <img src="<?php echo e(asset('gambar/products/' . $p->gambar)); ?>" 
                     class="card-img-top" 
                     alt="<?php echo e($p->nama_produk); ?>"
                     style="height: 250px; object-fit: cover;">
                
                <div class="card-body">
                    <span class="badge mb-2 px-3 py-2 
                        <?php echo e(str_contains(strtolower($p->kategori), 'house') ? 'hijau-toska-gelap' : 'bg-primary'); ?>">
                        <?php echo e($p->kategori); ?>

                    </span>
                    
                    <h4 class="card-title fw-bold text-toska-gelap"><?php echo e($p->nama_produk); ?></h4>
                    <p class="card-text text-muted small"><?php echo e($p->deskripsi); ?></p>
                </div>
                <div class="card-footer bg-white border-0 pb-4">
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/pages/products.blade.php ENDPATH**/ ?>