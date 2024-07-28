<?php

$this->Html->image("oculos_logo.png", array(
    "alt" => "",
    'url' => array('controller' => 'leituras', 'action' => 'index')
));

$userLogado = Hash::get($this->Session->read(), 'Auth.User.nome');

echo $this->Html->tag('h1', "$userLogado, bem vindo à Estante Virtual ");
echo '<br>';
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);
echo $this->Html->tag('h3', 'Organize suas leituras, estabeleça metas e escolha livros de acordo com seu momento!', array('class' => 'my-class', 'target' => '_blank'));

echo $this->Html->tag('span', null, array('class' => 'welcome'));

echo '<br>';

// icones de imagem

// livros
echo $this->Html->image("pilha-de-livros.png", array(
    "alt" => "",
    "title" => 'Livros',
    'url' => array('controller' => 'livros', 'action' => 'index')
));

// users
echo $this->Html->image("lista_usuario.png", array(
    "alt" => "",
    "title" => 'Usuários',
    'url' => array('controller' => 'users', 'action' => 'index')
));
echo '<br>';

// relatorio de leituras
echo $this->Html->image("relatorios.png", array(
    "alt" => "",
    "title" => 'Relatórios',
    'url' => array('controller' => 'relatorios', 'action' => 'relatorio_leituras')
));

// leituras
echo $this->Html->image("user_leitura.png", array(
    "alt" => "",
    "title" => 'Leituras',
    'url' => array('controller' => 'leituras', 'action' => 'index')
));
echo '<br>';
