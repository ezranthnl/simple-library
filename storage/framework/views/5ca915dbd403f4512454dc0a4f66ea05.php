<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(config('app.name', 'Laravel')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']); ?>
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 link-secondary" href="index">Daftar Buku</a>
                <a class="p-2 link-secondary" href="landing">Halaman Utama</a>
                <a class="p-2 link-secondary" href="input">Tambah Buku</a>

            </nav>
        </div>
    </div>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>


</body>

</html>
<?php /**PATH C:\laragon\www\simple-library\resources\views/layouts/template.blade.php ENDPATH**/ ?>