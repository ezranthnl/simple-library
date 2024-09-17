<?php $__env->startSection('title', 'Daftar Buku'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Semua Buku</h1>
    </div>

    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Nama Penulis</th>
                    <th scope="col">Email Penulis</th>
                    <th scope="col">Tanggal Rilis</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($book->id); ?></th>
                        <td><?php echo e($book->title); ?></td>
                        <td><?php echo e($book->description); ?></td>
                        <td><?php echo e($book->page_count); ?></td>
                        <td><?php echo e($book->author_name); ?></td>
                        <td><?php echo e($book->author_email); ?></td>
                        <td><?php echo e($book->published_date); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6">Ga ada buku sama sekali vv</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\simple-library\resources\views/index.blade.php ENDPATH**/ ?>