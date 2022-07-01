<?php

echo $this->Html->tag('h1', 'Recuperar senha');

echo $this->Form->create('User');
echo $this->Form->input('email', ['label' => 'Digite seu e-mail', 'required' => true]);
echo '<br>';

echo $this->Form->end('Cadastrar');

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
