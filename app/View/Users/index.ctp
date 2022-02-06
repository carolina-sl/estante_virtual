<?php

$colunas = ['ID', 'NOME','LOCALIDADE', 'UF'];
 $users = [];
 foreach ($dados as $dado) {
     $users[] = [
         $dado['User']['id'],
         $this->Html->link($dado['User']['nome'],  array('controller' => 'leituras', 'action' => 'ver', $dado['User']['id'])),
         $dado['Endereco']['cidade'],
         $dado['Endereco']['uf'],
     ];
 }
 
 
 $body = $this->Html->tableCells($users);
 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
 
 echo $this->Form->create('User');
 echo $this->Form->input('nome', ['required' => false]);
 echo $this->Form->end('Pesquisar');
 
 echo $this->Html->tag('table', $header . $body);
