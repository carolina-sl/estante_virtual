<?php

class LeituraTest extends CakeTestCase {

    public $fixtures = [
        'app.leitura'
    ];
    public $Leitura = null;

    public function setUp() {
        $this->Leitura = ClassRegistry::init('Leitura');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Leitura, 'Leitura'));
    }

}
