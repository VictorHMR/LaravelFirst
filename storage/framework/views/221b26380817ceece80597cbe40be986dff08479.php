
<?php $__env->startSection('title', 'Albuns'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Listar Albuns</h1>
        </div>
    </header>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            <tr>
                <th>Albuns:</th>
                <th></th>
                <th><a href="/album/create">Adicionar</a></th>
            </tr>
            <tr>
                <td>Ano</td>
                <td>Nome</td>
                <td>Operação</td>
            </tr>

        </table>
    </main>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/Album/albuns.blade.php ENDPATH**/ ?>