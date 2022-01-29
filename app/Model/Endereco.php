<?php

App::uses('AppModel', 'Model');

class Endereco extends AppModel {

    public $name = 'Endereco';
    public $hasMany = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'endereco_id'
        ]
    ];

}
