<?php

echo $this->Html->tag('h1', $this->Html->image("detalhe_livro.png", array(
    "alt" => "",

)));

echo $this->Html->tag('h1', 'Detalhes do Livro');
    
$colunas = array('id', 'Titulo', 'Descrição', 'Autor', 'Quantidade de Páginas');
$header = $this->Html->tableHeaders($colunas);

    $detalhar = array();
        $detalhar[] = array(
            $dado['Livro']['id'],
            $dado['Livro']['titulo'],
            $dado['Livro']['descricao'],
            $dado['Livro']['autor'],
            $dado['Livro']['qtd_pagina']
        );

$body = $this->Html->tableCells($detalhar);
echo $this->Html->tag('table', $header . $body);
echo $this->Html->link(__('Voltar'), ['action' => 'index']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);
echo $this->Html->css('forms');