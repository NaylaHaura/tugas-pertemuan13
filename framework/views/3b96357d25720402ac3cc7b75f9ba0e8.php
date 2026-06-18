<?php $__env->startSection('page-title', 'Kelola Galeri'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Foto Galeri</h5>
    <a href="<?php echo e(route('admin.galeri.create')); ?>" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
        <i class="bi bi-plus-lg me-1"></i> Tambah Foto
    </a>
</div>

<div class="row g-3">
    <?php $__empty_1 = true; $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm h-100">
            <img src="<?php echo e(asset('gambar/galeri/'.$galeri->gambar)); ?>" style="height:140px;object-fit:cover;">
            <div class="card-body">
                <p class="fw-bold mb-1 small"><?php echo e($galeri->judul); ?></p>
                <div class="d-flex gap-1">
                    <a href="<?php echo e(route('admin.galeri.edit', $galeri->id)); ?>" class="btn btn-sm btn-outline-primary flex-grow-1">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="<?php echo e(route('admin.galeri.destroy', $galeri->id)); ?>" method="POST" class="flex-grow-1" onsubmit="return confirm('Hapus foto ini?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p class="text-muted text-center py-4">Belum ada foto di galeri.</p>
    <?php endif; ?>
</div>

<div class="mt-3"><?php echo e($galeris->links()); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/admin/galeri/index.blade.php ENDPATH**/ ?>