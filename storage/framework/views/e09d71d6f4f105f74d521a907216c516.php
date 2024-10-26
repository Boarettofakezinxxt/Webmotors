<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Carros</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Inline para ajuste do layout -->
    <style>
        /* Ajuste para o rodapé sempre ficar no final da página */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1; /* O main ocupa todo o espaço disponível */
        }

        footer {
            margin-top: auto; /* O footer fica na parte inferior */
            background-color: #343a40; /* Cor de fundo escura */
            color: white;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('carros.index')); ?>">Venda de Carros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Links para Carros, Fabricantes e Vendedores -->
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('carros.index')); ?>">Carros</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('fabricantes.index')); ?>">Fabricantes</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('vendedores.index')); ?>">Vendedores</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer>
    © <?php echo e(date('Y')); ?> Venda de Carros. Todos os direitos reservados.
</footer>

<!-- Bootstrap JS (inclui Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH /Users/made4it/Documents/pweb2_2024_2/resources/views/layouts/app.blade.php ENDPATH**/ ?>