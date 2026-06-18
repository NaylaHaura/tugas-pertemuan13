<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Artikel</p>
                <h3 class="fw-bold mb-0"><?php echo e($totalArtikel); ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Produk</p>
                <h3 class="fw-bold mb-0"><?php echo e($totalProduk); ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Layanan</p>
                <h3 class="fw-bold mb-0"><?php echo e($totalLayanan); ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <p class="text-muted small mb-1">Total Foto Galeri</p>
                <h3 class="fw-bold mb-0"><?php echo e($totalGaleri); ?></h3>
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <h6 class="fw-bold mb-3">Menu Pengelolaan Sistem</h6>
        <div class="row g-3">
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.artikel.index')); ?>" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-newspaper me-2"></i> Kelola Artikel/Berita
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.produk.index')); ?>" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-box-seam me-2"></i> Kelola Produk
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.layanan.index')); ?>" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-gear me-2"></i> Kelola Layanan
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.galeri.index')); ?>" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-images me-2"></i> Kelola Galeri
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.profil.edit')); ?>" class="btn btn-outline-success w-100 text-start">
                    <i class="bi bi-building me-2"></i> Profil Perusahaan
                    <?php if(!$profilSudahDiisi): ?>
                        <span class="badge bg-warning text-dark ms-1">Belum diisi</span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(route('admin.produk.pdf')); ?>" target="_blank" class="btn btn-outline-secondary w-100 text-start">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Cetak Laporan Produk (PDF)
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>