<?php

App::uses('AppModel', 'Model');

class Endereco extends Model {
    
    public $name = 'Endereco';
    public $hasMany = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'endereco_id'
        ]
    ];
}

