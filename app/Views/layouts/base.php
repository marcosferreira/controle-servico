<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Serviços</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body mb-4" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand"><img src="<?php echo base_url('brasao.png'); ?>" alt="Brasão de Dona Inês - PB" width="48"> Controle de Serviços - TI</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Procurar por algo..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </nav>


    <div class="container">
        <?php echo $this->renderSection('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <?php echo $this->renderSection('script');?>
</body>

</html>