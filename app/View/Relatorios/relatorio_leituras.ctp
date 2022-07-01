<?php

echo $this->Html->tag('h1', 'Relatório - Total de leituras por situação');

$colunas = ['TOTAL DE LEITURAS', 'TOTAL DE LIVROS LIDOS', 'TOTAL DE LIVROS LENDO', 'TOTAL DE LIVROS QUERO LER'];
 
 $leituras = [];

 foreach ($virtualFieldsTotalsLeituras as $virtualFieldsTotalLeitura) {
     $leituras [] = [
        //$this->Html->link(__['controller' => 'leituras', 'action' => 'add']);
        //$this->Html->link(__($virtualFieldsTotalLeitura['Leitura']['total_leituras'])),
        //$this->Html->link(__($virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lido'])),
        //$this->Html->link(__($virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lendo'])),
        //$this->Html->link(__($virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_quero_ler']))
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_leituras'],
            ['controller' => 'relatorios', 'action' => 'relatorio_users']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lido'],
            ['controller' => 'relatorios', 'action' => 'relatorio_users']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lendo'],
            ['controller' => 'relatorios', 'action' => 'relatorio_users']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_quero_ler'],
            ['controller' => 'relatorios', 'action' => 'relatorio_users']
        )
         
     ];
 }
 
 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);
 
echo $this->Html->link(__('Cadastrar Leitura'), ['controller' => 'leituras', 'action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

