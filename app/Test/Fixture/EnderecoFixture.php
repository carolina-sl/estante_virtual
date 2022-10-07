<?php

class EnderecoFixture extends CakeTestFixture {

    public $name = 'Endereco';
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'logradouro' => ['type' => 'string', 'length' => 255],
        'bairro' => ['type' => 'string', 'length' => 255],
        'numero' => ['type' => 'string', 'length' => 255],
        'complemento' => ['type' => 'string', 'length' => 255],
        'cidade' => ['type' => 'string', 'length' => 255],
        'uf' => ['type' => 'string', 'length' => 2],
        'user_id' => ['type' => 'integer']
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'logradouro' => 'logradouro logradouro',
                'bairro' => 'bairro bairro',
                'numero' => 'numero numero',
                'complemento' => 'complemento complemento',
                'cidade' => 'cidade cidade',
                'uf' => 'RO',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'logradouro' => 'logradouro logradouro',
                'bairro' => 'bairro bairro',
                'numero' => 'numero numero',
                'complemento' => 'complemento complemento',
                'cidade' => 'cidade cidade',
                'uf' => 'AC',
                'user_id' => 2
            ]
        ];
        parent::init();
    }

}
