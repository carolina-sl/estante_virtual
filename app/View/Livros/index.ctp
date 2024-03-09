<?php

echo $this->Html->tag('h1', 'Lista de Livros');

$filtro =  $this->Form->create('Livro', ['class' => 'form-inline']);
$filtro .=  $this->Form->input('Livro.titulo', [
    'required' => false,
    'label' => ['text' => 'Título', 'class' => 'sr-only'],
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Título'
]);
$filtro .=  $this->Form->button('Pesquisar', ['type' => 'submit', 'class' => 'btn btn-info']);

$colunas = ['ID', 'TITULO','DESCRICAO', 'AUTOR', 'QUANTIDADE DE PÁGINAS', 'EDITAR'];
$livros = [];
$totalQtdPaginas = [];
foreach ($dados as $dado) {
     $livros[] = [
        $dado['Livro']['id'],
        $this->Html->link($dado['Livro']['titulo'], array('controller' => 'livros', 'action' => 'view', $dado['Livro']['id'])),
        $dado['Livro']['descricao'],
        $dado['Livro']['autor'],
        $dado['Livro']['qtd_pagina'],
        $this->Html->image("botao-editar.png", array(
        "alt" => "",
        'url' => array('controller' => 'livros', 'action' => 'edit', $dado['Livro']['id'])
        ))
    ];
    $totalQtdPaginas [] = $dado['Livro']['qtd_pagina'];
 }

$footer = ['TOTAL', '', '', '', array_sum($totalQtdPaginas)];
$body = $this->Html->tableCells($livros);
$header = $this->Html->tag('thead', $this->Html->tag('thead', $this->Html->tableHeaders($colunas)));
$baseboard = $this->Html->tag('thead', $this->Html->tableHeaders($footer), ['class' => 'thead-light']);

echo $this->Html->link(__('Cadastrar Livro'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users','action' => 'logout']);
echo $filtro;
echo $this->Html->tag('table', $header . $body . $baseboard, ['class' => 'table']);

