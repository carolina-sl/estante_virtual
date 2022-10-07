<?php

class LivroTest extends CakeTestCase {

    public $fixtures = [
        'app.livro'
    ];
    public $Livro = null;

    public function setUp() {
        $this->Livro = ClassRegistry::init('Livro');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Livro, 'Livro'));
    }

    public function testEmptyTitulo() {
        $data = ['titulo' => null];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);

        $data = ['titulo' => ''];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);

        $data = ['titulo' => '   '];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);
    }

    public function testEmptyDescricao() {
        $data = ['descricao' => null];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);

        $data = ['descricao' => ''];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);

        $data = ['descricao' => '   '];
        $saved = $this->Livro->save($data);
        $this->assertFalse($saved);
    }

}
