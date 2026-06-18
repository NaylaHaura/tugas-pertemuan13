<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - PT L'Essential</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f5; }
        .hijau-toska-gelap { background-color: #0d524d !important; color: #fff !important; }
        .sidebar { min-height: 100vh; }
        .sidebar a { color: rgba(255,255,255,0.85); text-decoration: none; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background-color: rgba(255,255,255,0.12); }
        .sidebar a.active { border-right: 3px solid #fff; }
        .nav-link-item { padding: 10px 18px; display: block; border-radius: 4px; margin: 2px 8px; }
    </style>
</head>
<body>

<div class="d-flex">
    <div class="sidebar hijau-toska-gelap" style="width: 240px;">
        <div class="p-3 border-bottom border-light border-opacity-25">
            <h5 class="fw-bold mb-0 text-white">PT L'Essential</h5>
            <small class="text-white-50">Admin Panel</small>
        </div>
        <nav class="mt-3">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="<?php echo e(route('admin.artikel.index')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.artikel.*') ? 'active' : ''); ?>">
                <i class="bi bi-newspaper me-2"></i> Artikel
            </a>
            <a href="<?php echo e(route('admin.produk.index')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.produk.*') ? 'active' : ''); ?>">
                <i class="bi bi-box-seam me-2"></i> Produk
            </a>
            <a href="<?php echo e(route('admin.layanan.index')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.layanan.*') ? 'active' : ''); ?>">
                <i class="bi bi-gear me-2"></i> Layanan
            </a>
            <a href="<?php echo e(route('admin.galeri.index')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.galeri.*') ? 'active' : ''); ?>">
                <i class="bi bi-images me-2"></i> Galeri
            </a>
            <a href="<?php echo e(route('admin.profil.edit')); ?>" class="nav-link-item <?php echo e(request()->routeIs('admin.profil.*') ? 'active' : ''); ?>">
                <i class="bi bi-building me-2"></i> Profil Perusahaan
            </a>
            <hr class="border-light border-opacity-25 mx-3">
            <a href="<?php echo e(url('/')); ?>" class="nav-link-item" target="_blank">
                <i class="bi bi-globe me-2"></i> Lihat Website
            </a>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button type="submit" class="nav-link-item border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
            </form>
        </nav>
    </div>

    <div class="flex-grow-1">
        <nav class="navbar navbar-light bg-white shadow-sm px-4 py-3">
            <span class="fw-bold"><?php echo $__env->yieldContent('page-title', 'Dashboard'); ?></span>
            <span class="text-muted small">Halo, <?php echo e(session('admin_name')); ?></span>
        </nav>

        <div class="p-4">
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\lessential\resources\views/admin/layouts/admin.blade.php ENDPATH**/ ?>