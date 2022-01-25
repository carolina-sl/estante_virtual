<?php

App::uses('AppModel', 'Model');

class Leitura extends AppModel {
    
    public $name = 'Leitura';
    public $belongsTo = [
        'User' => [
            'className' => 'User'
        ]
    ];
    
}