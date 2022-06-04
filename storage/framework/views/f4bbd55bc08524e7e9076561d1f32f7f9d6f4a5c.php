
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
        <form>

            <table class="FormAlbum">
                <tr>
                    <td><label for="nomeFaixa" class="lblPesquisa">Digite o Nome do album</label></td>
                    <td><input type="text" name="nomeFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td><label for="tmpFaixa" class="lblPesquisa">Digite o ano</label></td>
                    <td><input type="text" name="tmpFaixa" class="faixa"></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <button id="btnAdd">Adicionar</button>
                    </td>
                </tr>
            </table>
        </form>
    </nav>

    
    <main class="containerAlbuns">
        <table class="AlbunsAdd">
            <h1>Todos os Albuns</h1>
            <tr>
                <th>Ano</th>
                <th>Nome</th>
                <th>Operação</th>
            </tr>

            <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($album->dt_lanc); ?></td>
                <td><?php echo e($album->name); ?></td>
                <td></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>



</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/album.blade.php ENDPATH**/ ?>