
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
        <form action="/faixa" method="POST">
        <?php echo csrf_field(); ?>
            <table class="FormAlbum">
                <tr>
                    <td> <label for="albumPert" class="lblPesquisa">Album pertencente</label></td>
                    <td><select name="albumPert" id="albumPert" class="lblPesquisa" required> 
                        <option value="none" selected disabled>Selecione o album</option>
                        <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($album->id); ?>"><?php echo e($album->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select></td>
                </tr>
                <tr>
                    <td><label for="nomeFaixa" class="lblPesquisa">Digite o Nome da Faixa</label></td>
                    <td><input type="text" name="nomeFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="tmpFaixa" class="lblPesquisa">Digite a duração da Faixa</label></td>
                    <td><input type="time" name="tmpFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="numFaixa" class="lblPesquisa">Digite o Numero da Faixa</label></td>
                    <td><input type="text" name="numFaixa" id="numFaixa" class="faixa" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonTD">
                        <input type="submit" class="btnAdd" value="Adicionar Faixa">
                    </td>
                </tr>
            </table>
        </form>

        <main class="containerAlbuns">
        <table class="FaixasAdd">
            <h1>Todas as Faixas</h1>
            <tr>
                <th></th>
                <th>Num</th>
                <th>Nome</th>
                <th>Duração</th>
                <th>Album</th>

            </tr>
        <?php $__currentLoopData = $faixas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faixa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
                <td>
                <form action="/faixa/<?php echo e($faixa->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="BtnRemove">-</button></td>
                    </form>      
                <td><?php echo e($faixa->num); ?></td>
                <td><?php echo e($faixa->name); ?></td>
                <td><?php echo e($faixa->duracao); ?></td>
                <?php $__currentLoopData = $albuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($album->id == $faixa->album_pert): ?>
                <td><?php echo e($album->name); ?></td>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </main>



    </nav>


</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\1.LARAVEL\ProjectAlbum\resources\views/faixa.blade.php ENDPATH**/ ?>