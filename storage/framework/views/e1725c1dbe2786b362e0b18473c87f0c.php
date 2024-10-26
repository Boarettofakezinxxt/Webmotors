<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Cadastrar Novo Fabricante</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('fabricantes.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo e(old('nome')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" name="pais" class="form-control" id="pais" value="<?php echo e(old('pais')); ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="<?php echo e(route('fabricantes.index')); ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/fabricantes/create.blade.php ENDPATH**/ ?>