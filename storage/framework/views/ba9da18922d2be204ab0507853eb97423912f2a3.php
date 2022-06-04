
<?php $__env->startSection('title', 'Faixas'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Adicionar Faixa</h1>
        </div>
    </header>
    <a href="/">Voltar</a>
    <nav class="containerAdicao">
        <form>
            <label for="albumPert" class="lblPesquisa">Album pertencente</label><br>
                <select name="albumPert" id="albumPert" class="lblPesquisa"> </select><br>
                <label for="nomeFaixa" class="lblPesquisa">Digite o Nome da Faixa</label>
                <input type="text" name="nomeFaixa" class="faixa">
                <label for="tmpFaixa" class="lblPesquisa">Digite a duração da Faixa</label>
                <input type="text" name="tmpFaixa" class="faixa">
               
                <br>
                <br>
                <button id="btnAdd">Adicionar</button>
        </form>
    </nav>


</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/faixa.blade.php ENDPATH**/ ?>