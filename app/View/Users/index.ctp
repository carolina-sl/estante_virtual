<?php
echo $this->Html->tag('h1', 'Lista de Usuários');

$filtro =  $this->Form->create('User', ['class' => 'form-inline']);
$filtro .=  $this->Form->input('User.nome', [
    'required' => false,
    'label' => ['text' => 'Nome', 'class' => 'sr-only'],
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome'
]);
$filtro .=  $this->Form->button('Pesquisar', ['type' => 'submit', 'class' => 'btn btn-info']);
//$filtro .=  $this->Form->end('Pesquisar');

$colunas = ['ID', 'NOME','USERNAME', 'EMAIL',  'EDITAR'];
$users = [];
foreach ($dados as $dado) {
     $users[] = [
        $dado['User']['id'],
        $this->Html->link($dado['User']['nome'], array('controller' => 'users', 'action' => 'view', $dado['User']['id'])),
        substr_replace($dado['User']['username'], '***.***', 4, -3),
        $dado['User']['email'],
        $this->Html->image("botao-editar.png", array(
        "alt" => "",
        'url' => array('controller' => 'users', 'action' => 'edit', $dado['User']['id'])
        ))
     ];
 }
$body = $this->Html->tableCells($users);
$header = $this->Html->tag('thead', $this->Html->tag('thead', $this->Html->tableHeaders($colunas)));
echo $this->Html->link(__('Cadastrar Usuário'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
echo $filtro;
echo $this->Html->tag('table', $header . $body, ['class' => 'table']);

var_dump(getcwd());// verificar o caminho do diretório atual
