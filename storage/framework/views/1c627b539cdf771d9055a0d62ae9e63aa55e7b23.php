<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="color:red">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($e); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <form action="/funcionario" method="post">
        <?php echo csrf_field(); ?>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" />
        <br/>
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" />
        <br/>
        <input type="submit" value="Criar">
    </form>
</body>
</html><?php /**PATH C:\laravel-gerson-20220504\template-php-laravel-mysql\resources\views/funcionario/create.blade.php ENDPATH**/ ?>