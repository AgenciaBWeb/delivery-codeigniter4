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
            <div class="card-body">
                <h4 class="card-title"><?php echo $titulo; ?></h4>

                <div class="ui-widget">
                    <input id="query" name="query" class="form-control bg-light mb-5">
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>CPF</th>
                                <th>Ativo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo $usuario->nome; ?></td>
                                    <td><?php echo $usuario->email; ?></td>
                                    <td><?php echo $usuario->cpf; ?></td>
                                    <td><?php echo ($usuario->ativo == false) ? '<label class="badge badge-danger">Não</label>' : '<label class="badge badge-primary">Sim</label>'; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>




<?php echo $this->section('scripts'); ?>

<!-- Aqui enviamos ao template os scripts -->

<script src="<?php echo site_url('admin/vendors/auto-complete/jquery-ui.js'); ?>"></script> 

<script>
    $(function () {
        $("#query").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?php echo site_url('admin/usuarios/procurar'); ?>",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function (data) {
                        if (data.length < 1) {
                            var data = [
                                {
                                    label: 'Unuário não encontrado!',
                                    value: -1
                                }
                            ];
                        }
                        response(data);
                    },

                });
            },
            
            minLenght: 1,
            select: function(event, ui){
                if(ui.item.value == -1){
                    $(this).val('');
                    return false;
                }else{
                    window.location.href = "<?php echo site_url('admin/usuarios/show/'); ?>"+ui.item.id;
                }
                    
            }
            
        });
    });
</script>

<?php echo $this->endSection(); ?>