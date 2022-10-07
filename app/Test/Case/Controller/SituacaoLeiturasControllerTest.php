<?php

class SituacaoLeiturasControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.situacao_leitura',
    ];

    public function testIndex() {
        $this->testAction('situacao_leituras');

        $dados = Hash::get($this->vars, 'dados');
        $countDados = count($dados);

        $this->assertNotEmpty($dados);
        $this->assertTrue(($countDados == 4), "total situação leituras esperado 4 recebido {$countDados}");
    }

}
