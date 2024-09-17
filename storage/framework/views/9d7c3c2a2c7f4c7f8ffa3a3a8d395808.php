<?php $__env->startSection('title', 'Tambah Buku'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Tambah Buku</h1>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger mt-4">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="<?php echo e(route('book.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>

                </div>

                <div class="form-group">
                    <label for="page_count">Page Count:</label>
                    <input type="number" class="form-control" id="page_count" name="page_count" required>

                </div>

                <div class="form-group">
                    <label for="author_name">Author Name:</label>
                    <input type="text" class="form-control" id="author_name" name="author_name" required>
                </div>

                <div class="form-group">
                    <label for="author_email">Author
                        Email:</label>
                    <input type="email" class="form-control" id="author_email" name="author_email" required>
                </div>

                <div class="form-group">
                    <label for="published_date">Published Date:</label>
                    <input type="date" class="form-control" id="published_date" name="published_date">

                </div><br>

                <a><button type="submit" class="btn btn-primary" href='index'>Submit</button></a>
            </form>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\simple-library\resources\views/input.blade.php ENDPATH**/ ?>