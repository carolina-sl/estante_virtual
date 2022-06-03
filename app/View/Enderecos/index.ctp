<?php

echo $this->Html->tag('h1', 'Lista de Enderecos');

$filtro =  $this->Form->create('Endereco');
$filtro .=  $this->Form->input('Endereco.logradouro', ['required' => false]);
$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'LOGRADOURO','BAIRRO', 'NUMERO', 'COMPLEMENTO', 'CIDADE', 'UF'];
$enderecos = [];
foreach ($dados as $dado) {
     //$users = [];
     $enderecos[] = [
         $dado['Endereco']['id'],
         $this->Html->link($dado['Endereco']['logradouro'], array('controller' => 'enderecos', 'action' => 'view', $dado['Endereco']['id'])),
         $dado['Endereco']['bairro'],
         $dado['Endereco']['numero'],
         $dado['Endereco']['complemento'],
         $dado['Endereco']['cidade'],
         $dado['Endereco']['uf'],
     ];
     //$rowUser[] = $users;
 }
 
 
//$body = $this->Html->tableCells($rowUser);
$body = $this->Html->tableCells($enderecos);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
echo $this->Html->link(__('Cadastrar Endereço'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
 
echo $filtro;
echo $this->Html->tag('table', $header . $body);
//print_r($this->Session->read());



