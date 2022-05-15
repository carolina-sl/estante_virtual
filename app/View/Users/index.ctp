<?php
echo $this->Html->tag('h1', 'Lista de Usuários');

$filtro =  $this->Form->create('User');
$filtro .=  $this->Form->input('User.nome', ['required' => false]);
$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'NOME','USERNAME', 'UF'];
$users = [];
foreach ($dados as $dado) {
     //$users = [];
     $users[] = [
         $dado['User']['id'],
         $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
         $dado['User']['username'],
         $dado['Endereco']['uf'],
     ];
     //$rowUser[] = $users;
 }
 
 
//$body = $this->Html->tableCells($rowUser);
$body = $this->Html->tableCells($users);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
 
echo $filtro;
echo $this->Html->tag('table', $header . $body);

var_dump(getcwd());// verificar o caminho do diretório atual
