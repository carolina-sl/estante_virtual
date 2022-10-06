<?php

echo $this->Html->tag('h1', 'Relatório - Total de leituras por situação');

$colunas = ['TOTAL DE LEITURAS', 'TOTAL DE LIVROS LIDOS', 'TOTAL DE LIVROS LENDO', 'TOTAL DE LIVROS QUERO LER'];
 
 $leituras = [];
 foreach ($virtualFieldsTotalsLeituras as $virtualFieldsTotalLeitura) {
     $leituras [] = [
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_leituras'],
            ['controller' => 'leituras', 'action' => 'index']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lido'],
            ['controller' => 'leituras', 'action' => 'leitura_situacao_livros_lidos_relatorio']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lendo'],
            ['controller' => 'leituras', 'action' => 'leitura_situacao_livros_lendo_relatorio']
        ),
        $this->Html->link(
            $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_quero_ler'],
            ['controller' => 'leituras', 'action' => 'leitura_situacao_livros_quero_ler_relatorio']
        )
         
     ];
 }
 
 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);
 
 if (empty($leituras)) {
     echo 'Nenhum dado encontrado.';
 }
 
echo $this->Html->link(__('Cadastrar Leitura'), ['controller' => 'leituras', 'action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);
echo '<br>';

