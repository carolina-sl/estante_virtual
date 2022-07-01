<?php

echo $this->Html->tag('h1', 'Lista de Livros');

$filtro =  $this->Form->create('Livro');
$filtro .=  $this->Form->input('Livro.titulo', ['required' => false, 'multiple' => true]);
$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'TITULO','DESCRICAO', 'AUTOR', 'QUANTIDADE DE PÁGINAS'];
$livros = [];
$totalQtdPaginas = [];
foreach ($dados as $dado) {
     $livros[] = [
         $dado['Livro']['id'],
         $this->Html->link($dado['Livro']['titulo'], array('controller' => 'livros', 'action' => 'view', $dado['Livro']['titulo'])),
         $dado['Livro']['descricao'],
         $dado['Livro']['autor'],
         $dado['Livro']['qtd_pagina']
    ];
    $totalQtdPaginas [] = $dado['Livro']['qtd_pagina'];
 }

$footer = ['TOTAL', '', '', '', array_sum($totalQtdPaginas)];
$body = $this->Html->tableCells($livros);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
$baseboard = $this->Html->tag('thead', $this->Html->tableHeaders($footer), ['class' => 'thead-light']);

echo $this->Html->link(__('Cadastrar Livro'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users','action' => 'logout']);
echo $filtro;
echo $this->Html->tableCells($footer);
echo $this->Html->tag('table', $header . $body . $baseboard);

