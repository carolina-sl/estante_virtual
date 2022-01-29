<?php

App::uses('AppModel', 'Model');

class User extends AppModel {

    public $name = 'User';
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
    public $hasOne = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];

}
