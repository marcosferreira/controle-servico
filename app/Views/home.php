<?php echo $this->extend('layouts/base'); ?>

<?php echo $this->section('content'); ?>

<?php echo $this->include('includes/buttons-actions');?>

<div>
    <canvas id="services"></canvas>
</div>

<?php echo $this->endSection('content'); ?>

<?php echo $this->section('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

<script>
    const ctx = document.getElementById('services');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: 'Manutenção de Computadores',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            },
            {
                label: 'Manutenção de Impressoras',
                data: [10, 4, 12, 3, 6, 5],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?php echo $this->endSection('script'); ?>