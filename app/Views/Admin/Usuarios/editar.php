<?php echo $this->extend('Admin/layout/principal'); ?>

<?php echo $this->section('titulo'); ?> <?php echo $titulo; ?> <?php echo $this->endSection(); ?>


<?php echo $this->section('estilos'); ?>

<!-- Aqui enviamos ao template os estilos -->

<link rel="stylesheet" href="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.css'); ?>" />    

<?php echo $this->endSection(); ?>




<?php echo $this->section('conteudo'); ?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-primary pb-0 pt-4">
                <h4 class="card-title text-white text-center"><?php echo esc($titulo); ?></h4>
            </div> 
            <div class="card-body">

                <form class="forms-sample">
                    <?php echo $this->include('Admin/Usuarios/form'); ?>
                </form>

            </div>
        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>




<?php echo $this->section('scripts'); ?>

<!-- Aqui enviamos ao template os scripts -->

<?php echo $this->endSection(); ?>