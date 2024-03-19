<?php echo $this->extend('layouts/base'); ?>

<?php echo $this->section('content'); ?>

<div class="w-100 d-flex justify-content-center gap-2">
    <!-- Button trigger modal ServiceCategory -->
    <button type="button" class="flex-fill btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalServiceCategory">
        Categoria de Serviço
    </button>

    <!-- Button trigger modal ServiceType -->
    <button type="button" class="flex-fill btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalServiceType">
        Tipo de Serviço
    </button>

    <!-- Button trigger modal Sector -->
    <button type="button" class="flex-fill btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalSector">
        Setor
    </button>

    <!-- Button trigger modal Claimant -->
    <button type="button" class="flex-fill btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalClaimant">
        Requerente
    </button>

    <!-- Button trigger modal Service -->
    <button type="button" class="flex-fill btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#modalService">
        Serviço
    </button>
</div>

<div class="list-group my-2">
    <?php if ($service) : ?>
        <?php foreach ($service as $item) : ?>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $item->description; ?></a>
        <?php endforeach; ?>
    <?php else : ?>
        <a href="#" class="list-group-item list-group-item-action">A lista de serviços está vazia</a>
    <?php endif ?>
</div>

<?php echo $this->include('includes/modal-service.php'); ?>

<?php echo $this->endSection('content'); ?>