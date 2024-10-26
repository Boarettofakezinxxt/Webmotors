<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Cadastrar Novo Carro</h1>

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

        <form action="<?php echo e(route('carros.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo e(old('nome')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" value="<?php echo e(old('modelo')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" id="ano" value="<?php echo e(old('ano')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço (R$)</label>
                <input type="number" step="0.01" name="preco" class="form-control" id="preco" value="<?php echo e(old('preco')); ?>" required>
            </div>

            <div class="mb-3">
                <label for="fabricante_id" class="form-label">Fabricante</label>
                <select name="fabricante_id" id="fabricante_id" class="form-select" required>
                    <option value="">Selecione o Fabricante</option>
                    <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($fabricante->id); ?>" <?php echo e(old('fabricante_id') == $fabricante->id ? 'selected' : ''); ?>>
                            <?php echo e($fabricante->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="vendedor_id" class="form-label">Vendedor</label>
                <select name="vendedor_id" id="vendedor_id" class="form-select" required>
                    <option value="">Selecione o Vendedor</option>
                    <?php $__currentLoopData = $vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vendedor->id); ?>" <?php echo e(old('vendedor_id') == $vendedor->id ? 'selected' : ''); ?>>
                            <?php echo e($vendedor->nome); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>


            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control" id="descricao" rows="3"><?php echo e(old('descricao')); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem</label>
                <input type="file" name="imagem" class="form-control" id="imagem" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Carro</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/carros/create.blade.php ENDPATH**/ ?>