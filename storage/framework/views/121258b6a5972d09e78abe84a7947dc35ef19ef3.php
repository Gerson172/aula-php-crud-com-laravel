<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/funcionario/create">Adicionar funcionario</a>
    <hr>
    <?php $__currentLoopData = $funcs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($f->nome); ?>

        &nbsp;
        <?php echo e($f->endereco); ?>

        <a href="/funcionario/<?php echo e($f->id); ?>">Excluir</a>
        <a href="/funcionario/<?php echo e($f->id); ?>/edit">Alterar</a>

        <br />

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\laravel-gerson-20220504\template-php-laravel-mysql\resources\views/funcionario/index.blade.php ENDPATH**/ ?>