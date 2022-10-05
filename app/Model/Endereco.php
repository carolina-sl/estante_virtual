<?php

App::uses('AppModel', 'Model');

class Endereco extends AppModel {

    public $name = 'Endereco';
    public $hasMany = [
        
    ];
    public $hasOne = [
        'User' => [
            'className' => 'User'
        ],
    ];
}
