<?php

class LivrosControllerTest extends ControllerTestCase {

    public $fixtures = array(
        'app.livro',
        'app.leitura',
    );

    public function testIndex() {
        $this->testAction('livros');
    }

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
                [
                    'data' => $data,
                    'method' => 'post'
                ]
        );
    }

    public function testGetEdit() {
        $this->testAction('livros/edit/1');
    }

    public function testGetEditUndefined() {
        $this->testAction('livros/edit');
    }

    public function testGetEditIdNotExist() {
        $this->testAction('livros/edit/789');
    }

    public function testGetView() {
        $this->testAction('livros/view/1');
    }

    public function testGetViewUndefined() {
        $this->testAction('livros/view');
    }

    public function testGetViewIdNotExist() {
        $this->testAction('livros/view/789');
    }
}
