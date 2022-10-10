<?php

class LeiturasControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.user',
        'app.livro',
        'app.leitura',
        'app.situacao_leitura',
//        'app.endereco',
    ];

    public function testIndex() {
        $this->testAction('leituras');
    }

    public function testAdd() {
        $this->testAction('leituras/add');
    }

    public function testGetView() {
        $this->testAction('leituras/view/1');
        $this->assertNotEmpty(Hash::get($this->vars, 'dado.Leitura'));
    }

    public function testGetViewUndefined() {
        $this->testAction('leituras/view');
    }

    public function testGetLeituraSituacaoLivrosLidosRelatorio() {
        $this->testAction('leituras/leitura_situacao_livros_lidos_relatorio');

        $dados = Hash::get($this->vars, 'dados', []);
        $countDados = count($dados);

        $this->assertTrue(($countDados == 1), "count dados esperado 1 recebido {$countDados}");
    }

    public function testGetLeituraSituacaoLivrosLendoRelatorio() {
        $this->testAction('leituras/leitura_situacao_livros_lendo_relatorio');

        $dados = Hash::get($this->vars, 'dados', []);
        $countDados = count($dados);

        $this->assertTrue(($countDados == 1), "count dados esperado 1 recebido {$countDados}");
    }

    public function testGetLeituraSituacaoLivrosQueroLerRelatorio() {
        $this->testAction('leituras/leitura_situacao_livros_quero_ler_relatorio');

        $dados = Hash::get($this->vars, 'dados', []);
        $countDados = count($dados);

        $this->assertTrue(($countDados == 1), "count dados esperado 1 recebido {$countDados}");
    }

}
