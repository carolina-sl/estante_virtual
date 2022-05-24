<?php

echo $this->Html->image("oculos_logo.png", array(
    "alt" => "",
    'url' => array('controller' => 'leituras', 'action' => 'index')
));

echo $this->Html->tag('h1', 'Bem vindo à Estante Virtual');
echo '<br>';
echo $this->Html->para('text', 'Organize suas leituras, estabeleça metas e escolha livros de acordo com seu momento!', array('class' => 'my-class', 'target' => '_blank'));

echo $this->Html->tag('span', null, array('class' => 'welcome'));

echo '<br>';

// icones de imagem


// livros
echo $this->Html->image("biblioteca.png", array(
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

/*echo $this->Html->style(array(
    'background' => '#FF1493',
    'border-bottom' => '1px solid #000',
    'padding' => '10px'
));*/







