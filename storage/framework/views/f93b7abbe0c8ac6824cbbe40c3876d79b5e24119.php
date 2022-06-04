<?php $__env->startSection('title', 'Discografia'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>
<a href="/album">Adicionar Albuns</a> &nbsp;&nbsp;&nbsp;
<a href="/faixa">Adicionar Faixas</a>

    <nav class="containerPesquisa">
        <form>
            <label for="pesquisa" class="lblPesquisa">Digite uma palavra chave</label><br>
            <input type="text" name="pesquisa" id="pesquisa">
            <button id="btnPesquisar">Procurar</button>
        </form>
    </nav>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            <tr>
                <th>Album:Irineu</th>
            </tr>
            <tr>
                <td>N°</td>
                <td>Faixa</td>
                <td>Duração</td>
            </tr>

            <?php for($i = 0; $i< count($numero);$i++): ?>
            <tr>
                <td><?php echo e($numero[$i]); ?></td>
                <td><?php echo e($faixa[$i]); ?></td>
                <td><?php echo e($duracao[$i]); ?></td>

            </tr>
            <?php endfor; ?>
        </table>
    </main>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/listar.blade.php ENDPATH**/ ?>