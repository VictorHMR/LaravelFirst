
<?php $__env->startSection('title', 'Menu'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>

    <main class="containerMenu">
        <a href="/listar" class="buttonMenu">Listar Tudo</a>
        <a href="/album" class="buttonMenu">Controlar Albuns</a>
        <a href="/faixa" class="buttonMenu">Controlar Faixas</a>

    </main>





</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/menu.blade.php ENDPATH**/ ?>