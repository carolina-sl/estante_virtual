<?php

class InicioControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.livro',
        'app.endereco',
        'app.user',
        'app.leitura',
    ];

    public function testPaginaInicial() {
        $this->testAction('inicio/pagina_inicial');
    }

}
