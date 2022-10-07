<?php

class RelatoriosControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.user',
        'app.livro',
        'app.leitura',
        'app.situacao_leitura',
        'app.endereco',
    ];

    public function testRelatorioLeituras() {
        $this->testAction('relatorios/relatorio_leituras');

        $totalLeituras = Hash::get($this->vars, 'virtualFieldsTotalsLeituras.0.Leitura.total_leituras');
        $totalLidos = Hash::get($this->vars, 'virtualFieldsTotalsLeituras.0.Leitura.total_situacao_leitura_lido');
        $totalLendo = Hash::get($this->vars, 'virtualFieldsTotalsLeituras.0.Leitura.total_situacao_leitura_lendo');
        $totalQueroLer = Hash::get($this->vars, 'virtualFieldsTotalsLeituras.0.Leitura.total_situacao_leitura_quero_ler');

        $this->assertTrue(3 == $totalLeituras, "total leitura esperado 3 recebido {$totalLeituras}");
        $this->assertTrue(1 == $totalLidos, "total lidos esperado 1 recebido {$totalLidos}");
        $this->assertTrue(1 == $totalLendo, "total lendo esperado 1 recebido {$totalLendo}");
        $this->assertTrue(1 == $totalQueroLer, "total quero ler esperado 1 recebido {$totalQueroLer}");
    }
    
    public function testTotalLeituras() {
        $this->testAction('relatorios/total_leituras');

        $relatorioTotalLeituras = Hash::get($this->vars, 'relatorioTotalLeituras');
        $this->assertNotEmpty($relatorioTotalLeituras);
    }

}
