<?php

 $colunas = ['ID', 'NOME', 'USERNAME', 'ENDEREÇO', 'LEITURA'];
 
 $users = [];
 foreach ($dados as $dado) {
     $users [] = [
         $dado['User']['id'],
         $dado['User']['nome'],
         $dado['User']['username'],
         $dado['User']['endereco_id'],
         $dado['User']['leitura_id']
     ];
 }

 $body = $this->Html->tableCells($users);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);
