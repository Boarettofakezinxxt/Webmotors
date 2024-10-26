<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Carros para Venda</h1>
            <a href="<?php echo e(route('carros.create')); ?>" class="btn btn-primary">Cadastrar Novo Carro</a>
        </div>

        <!-- Formulário de busca -->
        <form action="<?php echo e(route('carros.index')); ?>" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou modelo" value="<?php echo e($search ?? ''); ?>">
                <button type="submit" class="btn btn-outline-primary">Buscar</button>
            </div>
        </form>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if($carros->count()): ?>
            <div class="row">
                <?php $__currentLoopData = $carros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <?php if($carro->imagem): ?>
                                <img src="<?php echo e(asset('storage/' . $carro->imagem)); ?>" class="card-img-top" alt="<?php echo e($carro->nome); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/default-car.png')); ?>" class="card-img-top" alt="Imagem Padrão">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($carro->nome); ?> - <?php echo e($carro->modelo); ?></h5>
                                <p class="card-text"><strong>Preço:</strong> R$ <?php echo e(number_format($carro->preco, 2, ',', '.')); ?></p>
                                <p class="card-text"><strong>Ano:</strong> <?php echo e($carro->ano); ?></p>
                                <p class="card-text"><strong>Fabricante:</strong> <?php echo e($carro->fabricante->nome); ?></p>
                                <p class="card-text"><strong>Vendedor:</strong> <?php echo e($carro->vendedor->nome); ?></p>
                                <p class="card-text"><?php echo e(Str::limit($carro->descricao, 100)); ?></p>

                                <!-- Botões de ações alinhados -->
                                <div class="d-flex justify-content-between">
                                    <!-- Botão de contato -->
                                    <button type="button" class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#contatoModal<?php echo e($carro->id); ?>">
                                        Contato
                                    </button>

                                    <!-- Botão de edição -->
                                    <a href="<?php echo e(route('carros.edit', $carro->id)); ?>" class="btn btn-warning btn-sm me-1">Editar</a>

                                    <!-- Formulário de exclusão -->
                                    <form action="<?php echo e(route('carros.destroy', $carro->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal para mostrar o contato do vendedor -->
                    <div class="modal fade" id="contatoModal<?php echo e($carro->id); ?>" tabindex="-1" aria-labelledby="contatoModalLabel<?php echo e($carro->id); ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contatoModalLabel<?php echo e($carro->id); ?>">Contato do Vendedor</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Nome:</strong> <?php echo e($carro->vendedor->nome); ?></p>
                                    <p><strong>Email:</strong> <?php echo e($carro->vendedor->email); ?></p>
                                    <p><strong>Telefone:</strong> <?php echo e($carro->vendedor->telefone); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p>Nenhum carro cadastrado para venda.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/carros/index.blade.php ENDPATH**/ ?>