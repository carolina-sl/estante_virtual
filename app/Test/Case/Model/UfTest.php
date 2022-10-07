<?php

class UfTest extends CakeTestCase {

    public $fixtures = [
        'app.uf'
    ];
    public $Uf = null;

    public function setUp() {
        $this->Uf = ClassRegistry::init('Uf');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->Uf, 'Uf'));
    }

}
