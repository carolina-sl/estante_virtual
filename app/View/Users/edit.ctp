<?php

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

echo $this->Html->tag('h1', 'Editar Usuário');

echo $this->Form->create('User');
echo $this->Form->hidden('User.id');
echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo $this->Form->input('email', ['label' => 'Email', 'required' => false]);
//echo $this->Form->input('dt_nascimento', ['label' => 'Data de nascimento', 'required' => false]);

echo $this->Form->end('Cadastrar');
echo $this->Form->end();

//echo $this->Form->input('imagem', array('type' => 'file'));
//echo $this->Form->submit('Enviar imagem');

