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
        'SituacaoLeitura' => [
            'className' => 'SituacaoLeitura'
        ]
    ];
    
    public $virtualFields = [
        'total_leituras' => 'SUM(CASE WHEN Leitura.id is not null THEN 1 ELSE 0 END)',
        'total_situacao_leitura_lido' => 'SUM(CASE WHEN situacao_leitura_id = 2 THEN 1 ELSE 0 END)',
        'total_situacao_leitura_lendo' => 'SUM(CASE WHEN situacao_leitura_id = 3 THEN 1 ELSE 0 END)',
        'total_situacao_leitura_quero_ler' => 'SUM(CASE WHEN situacao_leitura_id = 4 THEN 1 ELSE 0 END)'
    ];

}
