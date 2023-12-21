<div class="form-row">
    <div class="form-group col-md-6">
        <label for="exampleInputUsername1">Nome</label>
        <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo esc($usuario->nome); ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo esc($usuario->email); ?>">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="exampleInputPassword1">Telefone</label>
    <input type="text" class="form-control sp_celphones" id="exampleInputPassword1" value="<?php echo esc($usuario->telefone); ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Cpf</label>
        <input type="email" class="form-control cpf" id="exampleInputEmail1" value="<?php echo esc($usuario->cpf); ?>">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="ativo">Ativo</label>
        <select class="form-control" name="ativo">
            <?php if($usuario->id): ?>
            <option value="1" <?php echo ($usuario->ativo) ? "selected" : ""; ?>>Sim</option>
            <option value="0" <?php echo (!$usuario->ativo) ? "selected" : ""; ?>>Não</option>
            <?php else: ?>
            <option value="1">Sim</option>
            <option value="0">Não</option>
            <?php endif; ?>
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="is_admin">Perfil de acesso</label>
        <select class="form-control" name="is_admin">
            <?php if($usuario->id): ?>
            <option value="1" <?php echo ($usuario->ativo) ? "selected" : ""; ?>>Administrador</option>
            <option value="0" <?php echo (!$usuario->ativo) ? "selected" : ""; ?>>Cliente</option>
            <?php else: ?>
            <option value="1">Sim</option>
            <option value="0">Não</option>
            <?php endif; ?>
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
</div>
<div class="form-group col-md-6">
    <label for="password_confirmation">Cornfirmar Senha</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
</div>

</div>
<a href="<?php echo site_url("admin/usuarios"); ?>" class="btn btn-success"><i class="mdi mdi-update"> Atualizar</i></a>
<a href="<?php echo site_url("admin/usuarios/show/$usuario->id"); ?>" class="btn btn-info"><i class="mdi mdi-arrow-left-bold"> Voltar</i></a>