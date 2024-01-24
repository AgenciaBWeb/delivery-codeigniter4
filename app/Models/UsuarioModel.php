<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'usuarios';
    protected $returnType = 'App\Entities\Usuario';
    protected $allowedFields = ['nome', 'email', 'telefone'];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField = 'criado_em';
    protected $updatedField = 'atualizado_em';
    protected $deletedField = 'deletado_em';
    protected $validationRules = [
        'nome'     => 'required|min_length[4]|max_length[120]',
        'email'        => 'required|max_length[254]|valid_email|is_unique[usuarios.email]',
        'cpf'        => 'required|exact_length[14]|is_unique[usuarios.cpf]',
        'password'     => 'required|min_length[6]',
        'password_confirmation' => 'required_with[password]|max_length[255]|matches[password]',
    ];
    protected $validationMessages = [
        'email' => [
            'required' => 'Esse campo é obrigatório.',
            'is_unique' => 'Desculpe. Esse e-mail já existe.',
        ],
        'cpf' => [
            'required' => 'Esse campo é obrigatório.',
            'is_unique' => 'Desculpe. Esse CPF já existe.',
        ],
        'nome' => [
            'required' => 'Esse campo é obrigatório.',
            'is_unique' => 'Desculpe. Esse nome já existe.',
        ],
    ];

    public function procurar($term) {
        if ($term === null) {
            return [];
        } else {
            return $this->select(['id', 'nome'])
                            ->like('nome', $term)
                            ->get()
                            ->getResult();
        }
    }
}
