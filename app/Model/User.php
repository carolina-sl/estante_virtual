<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('AuthComponent', 'Controller/Component');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $name = 'User';
    public $findMethods = [
    ];
    public $validate = [
        'nome' => 'notBlank',
        'username' => 'notBlank',
        //'password' => 'validacao_senha'
    ];
    public $belongsTo = [
        'Endereco' => [
            'className' => 'Endereco'
        ]
    ];
    public $hasMany = [
        'Leitura' => [
            'className' => 'Leitura'
        ],
            /* 'Endereco' => [
              'className' => 'Endereco'
              ] */
    ];
    public $virtualFields = array(
        'total_uf' => 'SUM(CASE WHEN endereco_id is null THEN 0 ELSE 1 END)',
        'total_users' => 'COUNT(User.id)',
        'maior_idade' => 'SUM(CASE WHEN TIMESTAMPDIFF(year, dt_nascimento, now()) >= 18 THEN 1 ELSE 0 END)'
    );

    public function beforeSave($options = Array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    public function situacaoLeiturasUsers($dados = []) {
        $leitura = Hash::get($dados, 'Leitura');
        $dados = [];
        foreach ($leitura as $value) {
            if (!empty($value['situacao_leitura_id'])) {
                $dados[] = $value['situacao_leitura_id'];
            }
        }

        return $dados;
    }

    /*public function validacaoSenha() {
        return 'lalala';
    }*/

    public function userPaginometro($id) {

        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Livro.qtd_pagina'
            ],
            'conditions' => [
                'User.id' => $id,
                'Leitura.situacao_leitura_id' => 2
            ]
        ]);
        $userpPaginometro = [];
        $totalUserpPaginometro = [];

        foreach ($dados as $dado) {
            $userpPaginometro[] = (Hash::get($dado, 'Livro.qtd_pagina'));
            $totalUserpPaginometro = array_sum($userpPaginometro);
        }

        return $totalUserpPaginometro;
    }

}
