
<?php $__env->startSection('title', 'Albuns'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Adicionar Album</h1>
        </div>
    </header>
    <a href="/">Voltar</a>
    <nav class="containerAdicao">
        <form action="/album" method="POST">
            <?php echo csrf_field(); ?>
            <table class="FormAlbum">
                <tr>
                    <td><label for="nomeAlbum" class="lblPesquisa">Digite o Nome do album</label></td>
                    <td><input type="text" name="nomeAlbum" id="nomeAlbum" class="faixa" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><label for="anoAlbum" class="lblPesquisa">Digite o ano</label></td>
                    <td><input type="text" name="anoAlbum" id="anoAlbum" class="faixa" autocomplete="off"></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <input type="submit" class="btnAdd" value="Adicionar Album">
                    </td>
                </tr>
            </table>
        </form>
    </nav>

    
    <main class="containerAlbuns">
        <table class="AlbunsAdd">
            <h1>Todos os Albuns</h1>
            <tr>
                <th></th>
                <th>Ano</th>
                <th>Nome</th>
            </tr>

            <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/album/remove/<?php echo e($album->id); ?>" class="BtnRemove">-</a></td>
                <td><?php echo e($album->dt_lanc); ?></td>
                <td><?php echo e($album->name); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>



</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/album.blade.php ENDPATH**/ ?>