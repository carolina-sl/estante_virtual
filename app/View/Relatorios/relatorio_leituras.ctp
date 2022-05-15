<?php

echo $this->Html->tag('h1', 'Relatório - Total de leituras por situação');

$colunas = ['TOTAL DE LEITURAS', 'TOTAL DE LIVROS LIDOS', 'TOTAL DE LIVROS LENDO', 'TOTAL DE LIVROS QUERO LER'];
 
 $leituras = [];
 foreach ($virtualFieldsTotalsLeituras as $virtualFieldsTotalLeitura) {
     $leituras [] = [
         $virtualFieldsTotalLeitura['Leitura']['total_leituras'],
         $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lido'],
         $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_lendo'],
         $virtualFieldsTotalLeitura['Leitura']['total_situacao_leitura_quero_ler']
     ];
 }

 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);
 
