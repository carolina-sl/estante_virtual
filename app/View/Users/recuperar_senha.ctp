<?php

echo $this->Html->tag('h1', 'Recuperar senha');

echo $this->Form->create('User');
echo $this->Form->input('password', ['label' => 'Digite uma nova senha', 'required' => false]);

echo $this->Form->end('Cadastrar');
echo $this->Form->end();

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
