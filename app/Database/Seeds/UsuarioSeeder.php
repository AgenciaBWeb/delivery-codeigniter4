<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();
        
        $usuario = [
            'nome' => 'Tavilo Breno',
            'email' => 'breno@bol.com',
            'cpf' => '528.858.490-70',
            'telefone' => '88 -98808-0340'
        ];
        
        $usuarioModel->protect(false)->insert($usuario);
        
        $usuario = [
            'nome' => 'Sikeira Campos',
            'email' => 'sikeira@bol.com',
            'cpf' => '589.978.570-53',
            'telefone' => '99 - 99535-0340'
        ];
        
        $usuarioModel->protect(false)->insert($usuario);
        
        dd($usuarioModel->errors());
    }
}
