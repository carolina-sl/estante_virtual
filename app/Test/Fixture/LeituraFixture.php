<?php

class LeituraFixture extends CakeTestFixture {

    public $name = 'Leitura';    
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'user_id' => ['type' => 'integer'],
        'livro_id' => ['type' => 'integer'],
        'situacao_leitura_id' => ['type' => 'integer'],
        
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'user_id' => '1',
                'livro_id' => '1',
                'situacao_leitura_id' => '2' // Lido
            ],
            [
                'id' => 2,
                'user_id' => '1',
                'livro_id' => '2',
                'situacao_leitura_id' => '3' // Lendo
            ],
            [
                'id' => 3,
                'user_id' => '1',
                'livro_id' => '3',
                'situacao_leitura_id' => '3' // Quero ler
            ]
        ];
        parent::init();
    }

}
