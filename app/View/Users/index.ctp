<?php


$filtro =  $this->Form->create('User');
$filtro .=  $this->Form->input('User.nome', ['required' => false]);
$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'NOME','LOCALIDADE', 'UF'];
$users = [];
foreach ($dados as $dado) {
     $users[] = [
         $dado['User']['id'],
         $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
         $dado['User']['username'],
         $dado['Endereco']['uf'],
     ];
 }
 
 
$body = $this->Html->tableCells($users);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
 
echo $filtro;
echo $this->Html->tag('table', $header . $body);
