<?php

$colunas = ['ID', 'USUÁRIO', 'LIVRO', 'SITUAÇÃO DA LEITURA'];
 
 $leituras = [];
 
 foreach ($dados as $dado) {
     $leituras [] = [
         $dado['Leitura']['id'],
         //$dado['User']['nome'],
         $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
         $dado['Livro']['titulo'],
         $dado['SituacaoLeitura']['status']
     ];
 }


 $body = $this->Html->tableCells($leituras);

 $header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), array('class' => 'thead-light'));

 echo $this->Html->tag('table', $header . $body);
 
echo $this->Html->link(__('Cadastrar Leitura'), ['controller' => 'leituras', 'action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
