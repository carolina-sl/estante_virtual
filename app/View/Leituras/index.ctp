<?php

$colunas = ['ID', 'USUÁRIO', 'LIVRO', 'SITUAÇÃO DA LEITURA'];
 
 $leituras = [];
 foreach ($dados as $dado) {
     $leituras [] = [
         $dado['Leitura']['id'],
         $dado['User']['nome'],
         $dado['Livro']['titulo'],
         $dado['SituacaoLeitura']['status']
     ];
 }
 

 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);