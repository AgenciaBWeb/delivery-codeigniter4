<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?> <?php echo $titulo; ?> <?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>

<!-- Aqui enviamos ao template os estilos -->

<?php echo $this->endSection(); ?>




<?php echo $this->section('conteudo'); ?>

<?php echo $titulo; ?>

<?php echo $this->endSection(); ?>




<?php echo $this->section('scripts'); ?>

<!-- Aqui enviamos ao template os scripts -->

<?php echo $this->endSection(); ?>