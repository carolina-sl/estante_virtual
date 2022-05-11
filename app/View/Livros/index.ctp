<?php

$colunas = ['ID', 'TITULO','DESCRICAO', 'AUTOR', 'QUANTIDADE DE PÁGINAS'];
$livros = [];
foreach ($dados as $dado) {
     $livros[] = [
         $dado['Livro']['id'],
         $this->Html->link($dado['Livro']['titulo'], array('controller' => 'livros', 'action' => 'view', $dado['Livro']['titulo'])),
         $dado['Livro']['descricao'],
         $dado['Livro']['autor'],
         $dado['Livro']['qtd_pagina']
     ];
 }
$body = $this->Html->tableCells($livros);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);

echo $this->Html->tag('table', $header . $body);
