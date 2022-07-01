<?php

App::uses('AppModel', 'Model');

class Livro extends AppModel {

    public $name = 'Livro';
    public $hasMany = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];
    public $validate = [
        'titulo' => 'notBlank',
        'descricao' => 'notBlank',
        'autor' => 'notBlank'
    ];
    
}
