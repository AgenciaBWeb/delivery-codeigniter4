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
            'telefone' => '88 -98808-0340'
        ];
        
        $usuarioModel->protect(false)->insert($usuario);
        
        $usuario = [
            'nome' => 'Sikeira Campos',
            'email' => 'sikeira@bol.com',
            'telefone' => '99 - 99535-0340'
        ];
        
        $usuarioModel->protect(false)->insert($usuario);
        
        dd($usuarioModel->errors());
    }
}
