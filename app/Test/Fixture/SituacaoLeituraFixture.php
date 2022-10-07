<?php

class SituacaoLeituraFixture extends CakeTestFixture {

    public $name = 'SituacaoLeitura';
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'status' => ['type' => 'string', 'length' => 255]
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'status' => 'cancelado',
            ],
            [
                'id' => 2,
                'status' => 'lido',
            ],
            [
                'id' => 3,
                'status' => 'lendo',
            ],
            [
                'id' => 4,
                'status' => 'quero ler',
            ]
        ];
        parent::init();
    }

}
