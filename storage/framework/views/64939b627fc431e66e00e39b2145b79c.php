<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar Carro</h1>

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

        <form action="<?php echo e(route('carros.update', $carro->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo e(old('nome', $carro->nome)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" value="<?php echo e(old('modelo', $carro->modelo)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" id="ano" value="<?php echo e(old('ano', $carro->ano)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="number" step="0.01" name="preco" class="form-control" id="preco" value="<?php echo e(old('preco', $carro->preco)); ?>" required>
            </div>

            <div class="mb-3">
                <label for="fabricante_id" class="form-label">Fabricante</label>
                <select name="fabricante_id" id="fabricante_id" class="form-select" required>
                    <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($fabricante->id); ?>" <?php echo e($carro->fabricante_id == $fabricante->id ? 'selected' : ''); ?>>
                            <?php echo e($fabricante->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="vendedor_id" class="form-label">Vendedor</label>
                <select name="vendedor_id" id="vendedor_id" class="form-select" required>
                    <?php $__currentLoopData = $vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vendedor->id); ?>" <?php echo e($carro->vendedor_id == $vendedor->id ? 'selected' : ''); ?>>
                            <?php echo e($vendedor->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Carro</button>
            <a href="<?php echo e(route('carros.index')); ?>" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/carros/edit.blade.php ENDPATH**/ ?>