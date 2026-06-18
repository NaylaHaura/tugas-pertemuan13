<?php $__env->startSection('page-title', 'Kelola Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar Produk</h5>
    <div>
        <a href="<?php echo e(route('admin.produk.pdf')); ?>" target="_blank" class="btn btn-outline-secondary">
            <i class="bi bi-file-earmark-pdf me-1"></i> Cetak PDF
        </a>
        <a href="<?php echo e(route('admin.produk.create')); ?>" class="btn btn-success" style="background-color:#0d524d; border-color:#0d524d;">
            <i class="bi bi-plus-lg me-1"></i> Tambah Produk
        </a>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><img src="<?php echo e(asset('gambar/products/'.$produk->gambar)); ?>" style="width:60px;height:45px;object-fit:cover;border-radius:4px;"></td>
                        <td><?php echo e($produk->nama_produk); ?></td>
                        <td><span class="badge bg-secondary"><?php echo e($produk->kategori); ?></span></td>
                        <td class="text-end">
                            <a href="<?php echo e(route('admin.produk.edit', $produk->id)); ?>" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="<?php echo e(route('admin.produk.destroy', $produk->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Hapus produk ini?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data produk.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo e($produks->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/admin/produk/index.blade.php ENDPATH**/ ?>