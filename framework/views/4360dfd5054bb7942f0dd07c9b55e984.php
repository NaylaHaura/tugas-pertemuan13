

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Hubungi Kami</h2>
        <p class="text-muted">Kami siap melayani pertanyaan Anda mengenai produk dan layanan PT L'Essential</p>
    </div>

    <!-- Menampilkan Informasi Kontak di Atas (Opsional) -->
    <div class="row justify-content-center g-4 mb-5">
        <?php $__currentLoopData = $kontak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 h-100 text-center">
                <div class="icon-box bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                    <i class="bi <?php echo e($item->icon); ?> fs-4"></i>
                </div>
                <h6 class="fw-bold"><?php echo e($item->label); ?></h6>
                <p class="mb-0 text-muted small"><?php echo e($item->value); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Kotak Kirim Pesan di Tengah Halaman -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow p-4 p-md-5">
                <h4 class="fw-bold mb-4 text-center">Kirim Pesan</h4>
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="nama@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="5" placeholder="Apa yang bisa kami bantu?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\lessential\resources\views/pages/contact.blade.php ENDPATH**/ ?>