<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="/css/inicial.css">
        <link rel="stylesheet" href="/css/inputs.css">
        <link rel="stylesheet" href="/css/tables.css">
    </head>

    <body>
    <?php echo $__env->yieldContent('content'); ?>
    </body>

</html><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/layouts/main.blade.php ENDPATH**/ ?>