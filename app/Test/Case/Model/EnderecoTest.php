<?php

class EnderecoTest extends CakeTestCase {

    public $fixtures = [
        'app.endereco'
    ];
    public $Endereco = null;

    public function setUp() {
        $this->Endereco = ClassRegistry::init('Endereco');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Endereco, 'Endereco'));
    }

}
