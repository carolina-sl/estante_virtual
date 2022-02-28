<?php

/**
 * Leitura Fixture
 */
class LeituraFixture extends CakeTestFixture {

    /**
     * Import
     *
     * @var array
     */
    public $name = 'Leitura';
    public $import = [
        'model' => 'Leitura',
        'records' => false
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
