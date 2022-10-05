<?php

$colunas = ['ID', 'USUÁRIO', 'LIVRO'];
 
 $leituras = [];
 
 foreach ($dados as $dado) {
     $leituras [] = [
         $dado['Leitura']['id'],
         $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
         $this->Html->link($dado['Livro']['titulo'], array('controller' => 'livros', 'action' => 'view', $dado['Livro']['id']))
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
