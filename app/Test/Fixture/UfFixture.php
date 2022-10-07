<?php

class UfFixture extends CakeTestFixture {

    public $name = 'Endereco';
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'codigo_uf' => ['type' => 'string', 'length' => 30],
        'unidade_federacao' => ['type' => 'string', 'length' => 30],
        'uf' => ['type' => 'string', 'length' => 2],
        'endereco_id' => ['type' => 'integer']
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'codigo_uf' => 11,
                'unidade_federacao' => 'Rondonia',
                'uf' => 'RO',
                'endereco_id' => 1
            ],
            [
                'id' => 2,
                'codigo_uf' => 12,
                'unidade_federacao' => 'Acre',
                'uf' => 'AC',
                'endereco_id' => 2
            ]
        ];
        parent::init();
    }

}
