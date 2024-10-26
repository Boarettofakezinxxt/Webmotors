<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Fabricantes</h1>

        <a href="<?php echo e(route('fabricantes.create')); ?>" class="btn btn-primary mb-3">Cadastrar Novo Fabricante</a>

        <!-- Formulário de busca -->
        <form action="<?php echo e(route('fabricantes.index')); ?>" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou país" value="<?php echo e($search ?? ''); ?>">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($fabricantes->count()): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>País</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $fabricantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fabricante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($fabricante->id); ?></td>
                        <td><?php echo e($fabricante->nome); ?></td>
                        <td><?php echo e($fabricante->pais); ?></td>
                        <td>
                            <a href="<?php echo e(route('fabricantes.edit', $fabricante->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                            <form action="<?php echo e(route('fabricantes.destroy', $fabricante->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este fabricante?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum fabricante cadastrado.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/fabricantes/index.blade.php ENDPATH**/ ?>