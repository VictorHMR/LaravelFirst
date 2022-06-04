<?php $__env->startSection('title', 'Discografia'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>
    <a href="/">Voltar</a>
    <nav class="containerPesquisa">
        <form>
            <label for="pesquisa" class="lblPesquisa">Digite uma palavra chave</label><br>
            <input type="text" name="pesquisa" id="pesquisa">
            <button id="btnPesquisar">Procurar</button>
        </form>
    </nav>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th colspan="2"><?php echo e($album->name); ?>, <?php echo e($album->dt_lanc); ?></th>
            </tr>
            <tr>
                <td>N°</td>
                <td>Faixa</td>
                <td>Duração</td>
            </tr>
            <?php $__currentLoopData = $faixas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faixa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($faixa->album_pert == $album->id): ?>
            <tr>
                <td><?php echo e($faixa->num); ?></td>
                <td><?php echo e($faixa->name); ?></td>
                <td><?php echo e($faixa->duracao); ?></td>

            </tr>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </main>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/listar.blade.php ENDPATH**/ ?>