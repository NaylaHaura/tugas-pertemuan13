<?php $__env->startSection('page-title', 'Kelola Layanan'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Layanan</h5>
    <a href="<?php echo e(route('admin.layanan.create')); ?>" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
        <i class="bi bi-plus-lg me-1"></i> Tambah Layanan
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nama Layanan</th>
                        <th>Deskripsi</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $layanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($layanan->nama_layanan); ?></td>
                        <td><?php echo e(\Illuminate\Support\Str::limit($layanan->deskripsi, 80)); ?></td>
                        <td class="text-end">
                            <a href="<?php echo e(route('admin.layanan.edit', $layanan->id)); ?>" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('admin.layanan.destroy', $layanan->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus layanan ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="3" class="text-center text-muted py-4">Belum ada data layanan.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo e($layanans->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/admin/layanan/index.blade.php ENDPATH**/ ?>