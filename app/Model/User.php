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
        'password' => 'notBlank'
    ];
    public $belongsTo = [
        'Endereco' => [
            'className' => 'Endereco'
        ]
    ];
    public $hasMany = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];
    public $virtualFields = array(
        'total_uf' => 'SUM(CASE
		WHEN endereco_id is null THEN 0
        ELSE 1
    END)',
        'total_users' => 'COUNT(User.id)',
        'maior_idade' => 'SUM(CASE 
		WHEN TIMESTAMPDIFF(year, dt_nascimento, now()) >= 18 THEN 1
        ELSE 0
    END) '
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
            if (!empty($value['situacao_leitura_id'])){
                $dados[] = $value['situacao_leitura_id'];
            }
        }

        return $dados;
    }
  
}
