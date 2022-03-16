<?php

class LivroFixture extends CakeTestFixture {

    public $name = 'Livro';
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'titulo' => ['type' => 'string', 'length' => 255],
        'descricao' => ['type' => 'string', 'length' => 255],
        'autor' => ['type' => 'string', 'length' => 255],
        'qtd_pagina ' => ['type' => 'integer'],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'titulo' => 'Aventura',
                'descricao' => 'descricao',
                'autor' => 'Aventura',
                'qtd_pagina' => '10'
            ],
            [
                'id' => 2,
                'titulo' => 'Aventura2',
                'descricao' => 'descricao',
                'autor' => 'Aventura2',
                'qtd_pagina' => '20'
            ],
            [
                'id' => 3,
                'titulo' => 'Aventura3',
                'descricao' => 'descricao',
                'autor' => 'Aventura3',
                'qtd_pagina' => '30'
            ]
        ];
        parent::init();
    }

}
