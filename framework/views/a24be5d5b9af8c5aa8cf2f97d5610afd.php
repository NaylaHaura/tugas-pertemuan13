<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; font-size: 12px; color: #222; }
        h2 { margin-bottom: 0; color: #0d524d; }
        p.subtitle { margin-top: 2px; color: #555; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #ccc; padding: 6px 8px; text-align: left; vertical-align: top; }
        th { background-color: #0d524d; color: #fff; }
        tr:nth-child(even) { background-color: #f4f6f5; }
        .footer { margin-top: 24px; font-size: 10px; color: #777; }
    </style>
</head>
<body>
    <h2>Laporan Data Produk</h2>
    <p class="subtitle">PT L'Essential &mdash; Dicetak pada <?php echo e(date('d F Y, H:i')); ?></p>

    <table>
        <thead>
            <tr>
                <th style="width: 4%;">No</th>
                <th style="width: 22%;">Nama Produk</th>
                <th style="width: 15%;">Kategori</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo e($produk->nama_produk); ?></td>
                <td><?php echo e($produk->kategori); ?></td>
                <td><?php echo e($produk->deskripsi); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="4">Belum ada data produk.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <p class="footer">Total produk: <?php echo e($produks->count()); ?></p>
</body>
</html>
<?php /**PATH C:\laragon\www\lessential\resources\views/admin/produk/pdf.blade.php ENDPATH**/ ?>