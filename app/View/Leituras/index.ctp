<?php

echo $this->Html->tag('h1', 'Lista de Leituras');

$filtro =  $this->Form->create('Leitura');
$filtro .=  $this->Form->input('User.nome', ['required' => false]);
$filtro .=  $this->Form->end('Pesquisar');

$filtro =  $this->Form->create('Leitura', ['class' => 'form-inline']);
$filtro .=  $this->Form->input('User.nome', [
    'required' => false,
    'label' => ['text' => 'Nome', 'class' => 'sr-only'],
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome'
]);
$filtro .=  $this->Form->button('Pesquisar', ['type' => 'submit', 'class' => 'btn btn-info']);

echo $this->Html->link(__('Cadastrar Leitura'), ['controller' => 'leituras', 'action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);

$colunas = ['ID', 'USUÁRIO', 'LIVRO', 'SITUAÇÃO DA LEITURA', 'EDITAR'];
 
 $leituras = [];
 foreach ($dados as $dado) {
     $leituras [] = [
        $dado['Leitura']['id'],
        $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
        $dado['Livro']['titulo'],
        $dado['SituacaoLeitura']['situacao'],
        $this->Html->image("botao-editar.png", array(
        "alt" => "",
        'url' => array('controller' => 'leituras', 'action' => 'edit', $dado['Leitura']['id'])
        ))
     ];
 }

$body = $this->Html->tableCells($leituras);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));
echo $filtro;
echo $this->Html->tag('table', $header . $body, ['class' => 'table']);
 

