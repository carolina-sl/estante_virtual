<?php

$colunas = ['ID', 'NOME','LOCALIDADE', 'UF'];
 $users = [];
 foreach ($dados as $dado) {
     $users [] = [
         $dado['User']['id'],
         $dado['User']['nome'],
         $dado['Endereco']['cidade'],
         $dado['Endereco']['uf'],
     ];
 }
 $body = $this->Html->tableCells($users);
 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));
 echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
 echo '<br />';
 echo $this->Html->tag('table', $header . $body);
