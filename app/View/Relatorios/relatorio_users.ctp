<?php

echo $this->Html->tag('h1', 'Relatório');
$colunas = ['TOTAL DE USUÁRIOS', 'TOTAL DE USUÁRIOS COM ENDEREÇO', 'USUÁRIOS MAIORES DE 18 ANOS'];
$filtroUserName =  $this->Form->create('User');
$filtroUserName .=  $this->Form->input('User.nome', ['required' => false]);
$filtroUserName .=  $this->Form->end('Pesquisar');

$totais = [];
foreach ($dados as $dado) {
    $totais[] = [
        //$dado['id'],
        Hash::get($dado, ['total_users']),
        Hash::get($dado, ['total_uf']),
        Hash::get($dado, ['maior_idade']),
    ];
 }
 
 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
 $body = $this->Html->tableCells($totais);
 
 echo $this->Html->tag('table', $header . $body);
 
 