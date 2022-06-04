<?php $__env->startSection('title', 'Discografia'); ?>
<?php $__env->startSection('content'); ?>
<section id="containePrincipal">
    <header class="navBar">
        <div class="logo"><img src="/img/logo.png"></div>
        <div class="DiscText">
            <h1>Discografia</h1>
        </div>
    </header>

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

        </table>
    </main>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/welcome.blade.php ENDPATH**/ ?>