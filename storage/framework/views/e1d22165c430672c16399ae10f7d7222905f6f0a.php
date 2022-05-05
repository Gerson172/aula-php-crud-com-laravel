<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="/funcionario">Voltar</a>
    <hr>
    Nome:<?php echo e($func->nome); ?>

    <br>
    Endereço: <?php echo e($func->endereco); ?>

    <br>

    <form action="/funcionario/<?php echo e($func->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <input type="submit" value="Confirmar">
    </form>
    
</body>
</html><?php /**PATH C:\laravel-gerson-20220504\template-php-laravel-mysql\resources\views/funcionario/show.blade.php ENDPATH**/ ?>