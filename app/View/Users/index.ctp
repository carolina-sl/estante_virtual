<?php
echo $this->Html->tag('h1', 'Lista de Usuários');

$filtro =  $this->Form->create('User');
$filtro .=  $this->Form->input('User.nome', ['required' => false]);
$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'NOME','USERNAME', 'LOGRADOURO', 'EDITAR'];
$users = [];
foreach ($dados as $dado) {
     //$users = [];
     $users[] = [
         $dado['User']['id'],
         $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
         substr_replace($dado['User']['username'], '***.***', 4, -3),
         $dado['Endereco']['logradouro'],
         $this->Html->image("botao-editar.png", array(
        "alt" => "",
        'url' => array('controller' => 'users', 'action' => 'edit', $dado['User']['id'])
        ))
     ];
     //$rowUser[] = $users;
 }
 
 
//$body = $this->Html->tableCells($rowUser);
$body = $this->Html->tableCells($users);
$header = $this->Html->tag('thead', $this->Html->tableHeaders($colunas), ['class' => 'thead-light']);
echo $this->Html->link(__('Cadastrar Usuário'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
 
echo $filtro;
echo $this->Html->tag('table', $header . $body);

var_dump(getcwd());// verificar o caminho do diretório atual
