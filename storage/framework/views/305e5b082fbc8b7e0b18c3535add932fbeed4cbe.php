
<?php $__env->startSection('title', 'Albuns'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Adicionar Album</h1>
        </div>
    </header>

    <nav class="containerAdicao">
        <form>
        <label for="nomeFaixa" class="lblPesquisa">Digite o Nome do album</label>
                <input type="text" name="nomeFaixa" class="faixa">
                <label for="tmpFaixa" class="lblPesquisa">Digite o ano</label>
                <input type="text" name="tmpFaixa" class="faixa">
                <br><br>
            <button id="btnAdd">Adicionar</button>
        </form>
    </nav>

    <main class="containerAlbuns">
        <table class="AlbunsT">
            <tr>
                <th>Albuns:</th>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/albuns/albuns.blade.php ENDPATH**/ ?>