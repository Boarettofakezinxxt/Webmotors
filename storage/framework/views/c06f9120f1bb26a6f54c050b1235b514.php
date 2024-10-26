<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar Vendedor</h1>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Certifique-se de que o método é PUT e o ID do vendedor está sendo passado corretamente -->
        <form action="<?php echo e(route('vendedores.update', $vendedor->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?> <!-- Garante que o método é PUT -->

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo e($vendedor->nome); ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo e($vendedor->email); ?>" required>
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" value="<?php echo e($vendedor->telefone); ?>">
            </div>

            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="<?php echo e($vendedor->endereco); ?>">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Vendedor</button>
            <a href="<?php echo e(route('vendedores.index')); ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/vendedores/edit.blade.php ENDPATH**/ ?>