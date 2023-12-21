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
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $usuario->telefone; ?>">
    </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Cpf</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo esc($usuario->cpf); ?>">
    </div>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-group">
    <label for="exampleInputConfirmPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
</div>
<div class="form-check form-check-flat form-check-primary">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input">
        Remember me
    </label>
</div>
<button type="submit" class="btn btn-primary mr-2">Submit</button>
<button class="btn btn-light">Cancel</button>