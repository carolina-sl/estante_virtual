<?php

App::uses('Model', 'AppModel');

class Endereco extends Model {
    
    public $name = 'Endereco';
    public $hasMany = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'endereco_id'
        ]
    ];
}

