<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Vendedores</h1>

        <a href="<?php echo e(route('vendedores.create')); ?>" class="btn btn-primary mb-3">Cadastrar Novo Vendedor</a>

        <!-- Formulário de busca -->
        <form action="<?php echo e(route('vendedores.index')); ?>" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome, email ou telefone" value="<?php echo e($search ?? ''); ?>">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($vendedores->count()): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $vendedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($vendedor->id); ?></td>
                        <td><?php echo e($vendedor->nome); ?></td>
                        <td><?php echo e($vendedor->email); ?></td>
                        <td><?php echo e($vendedor->telefone); ?></td>
                        <td><?php echo e($vendedor->endereco); ?></td>
                        <td>
                            <a href="<?php echo e(route('vendedores.edit', $vendedor->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                            <form action="<?php echo e(route('vendedores.destroy', $vendedor->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este vendedor?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Nenhum vendedor cadastrado.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/vendedores/index.blade.php ENDPATH**/ ?>