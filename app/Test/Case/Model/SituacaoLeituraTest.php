<?php

class SituacaoLeituraTest extends CakeTestCase {

    public $fixtures = [
        'app.situacao_leitura'
    ];
    public $SituacaoLeitura = null;

    public function setUp() {
        $this->SituacaoLeitura = ClassRegistry::init('SituacaoLeitura');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->SituacaoLeitura, 'SituacaoLeitura'));
    }

}
