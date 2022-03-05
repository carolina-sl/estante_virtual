<?php

App::uses('AppModel', 'Model');

class Leitura extends AppModel {

    public $name = 'Leitura';
    public $belongsTo = [
        'User' => [
            'className' => 'User'
        ],
        'Livro' => [
            'className' => 'Livro'
        ],
    ];
    public $hasOne = [
        'SituacaoLeitura' => [
            'className' => 'SituacaoLeitura'
        ]
    ];
}
