<?php

App::uses('AppModel', 'Model');

class SituacaoLeitura extends AppModel {
    
    public $name = 'SituacaoLeitura';
    public $hasOne = [
        'Leitura' => [
            'className' => 'Leitura'
        ]
    ];
}