<?php echo $this->extend('layouts/base'); ?>

<?php echo $this->section('content'); ?>

<?php echo $this->include('includes/buttons-actions');?>

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