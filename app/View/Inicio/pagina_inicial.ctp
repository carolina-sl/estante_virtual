<?php

echo $this->Html->image("oculos_logo.png", array(
    "alt" => "",
    'url' => array('controller' => 'leituras', 'action' => 'index')
));

$userLogado = Hash::get($this->Session->read(), 'Auth.User.nome');

echo $this->Html->tag('h1', "$userLogado, bem vindo à Estante Virtual ");
echo '<br>';
echo $this->Html->para('text', 'Organize suas leituras, estabeleça metas e escolha livros de acordo com seu momento!', array('class' => 'my-class', 'target' => '_blank'));

echo $this->Html->tag('span', null, array('class' => 'welcome'));

echo '<br>';

// icones de imagem


// livros
echo $this->Html->image("pilha-de-livros.png", array(
    "alt" => "",
    'url' => array('controller' => 'livros', 'action' => 'index')
));

// users
echo $this->Html->image("lista_usuario.png", array(
    "alt" => "",
    'url' => array('controller' => 'users', 'action' => 'index')
));

// relatorio de leituras
echo $this->Html->image("relatorios.png", array(
    "alt" => "",
    'url' => array('controller' => 'relatorios', 'action' => 'relatorio_leituras')
));

// enderecos
echo $this->Html->image("enderecos.png", array(
    "alt" => "",
    'url' => array('controller' => 'enderecos', 'action' => 'index')
));

echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);

/*echo $this->Html->style(array(
    'background' => '#FF1493',
    'border-bottom' => '1px solid #000',
    'padding' => '10px'
));*/







