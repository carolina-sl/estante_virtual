<?php

/**
 * Livro Fixture
 */
class LivroFixture extends CakeTestFixture {

    /**
     * Import
     *
     * @var array
     */
    public $name = 'Livro';
    public $import = [
        'model' => 'Livro',
        'records' => false
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'titulo' => 'Aventura',
                'autor' => 'Aventura',
                'qtd_pagina' => '10'
            ],
            [
                'id' => 2,
                'titulo' => 'Aventura2',
                'autor' => 'Aventura2',
                'qtd_pagina' => '20'
            ]
        ];
        parent::init();
    }

}
