<?php

App::uses('AppModel', 'Model');

class Livro extends AppModel {

    public $name = 'Livro';
    public $validate = [
        
    ];
    public $hasMany = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];

}
