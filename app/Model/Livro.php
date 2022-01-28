<?php

App::uses('AppModel', 'Model');

class Livro extends Model {
    
    public $name = 'Livro';
    public $validate = [
        'titulo' => 'notBlank',
        'descricao' => 'notBlank',
        'autor' => 'notBlank'
    ];
    public $hasMany = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];
}
