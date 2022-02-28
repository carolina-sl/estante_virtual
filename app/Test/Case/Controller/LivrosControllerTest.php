<?php

class LivrosControllerTest extends ControllerTestCase {

    public $fixtures = array(
        'app.livro',
        'app.leitura',
    );

    /**
     * test Index method
     *
     * @return void
     */
    public function testIndex() {
        $this->testAction('livros');
    }

    /**
     * test Add method
     *
     * @return void
     */
    public function testAdd() {

        $data = [
            'Livro' => [
                'titulo' => 'livro titulo',
                'descricao' => 'livro descricao',
                'autor' => 'livro autor',
                'qtd_pagina' => '10'
            ]
        ];
        $result = $this->testAction(
                '/livros/add',
                array('data' => $data, 'method' => 'post')
        );
        debug($this->vars);

    }

}
