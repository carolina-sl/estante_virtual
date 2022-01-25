<?php

App::uses('Model', 'AppModel');

class Leitura extends AppModel {
    
    public $name = 'Leitura';
    public $belongsTo = [
        'User' => [
            'className' => 'User'
        ]
    ];
    
}