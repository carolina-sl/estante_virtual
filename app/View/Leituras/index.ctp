<?php

debug($dados);
 $colunas = ['ID', 'USUÁRIO', 'LIVRO', 'SITUAÇÃO DA LEITURA'];
 
 $leituras = [];
 foreach ($dados as $dado) {
     $leituras [] = [
         $dado['Leitura']['id'],
         $dado['User']['nome'],
         $dado['Leitura']['livro_id'],
         $dado['Leitura']['situacao_id']
     ];
 }
 
// debug($users);
 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);