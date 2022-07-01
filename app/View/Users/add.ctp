<?php

echo $this->Form->create('User');

echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo '<br>';
echo $this->Form->input('email', ['label' => 'E-mail', 'required' => false]);
echo '<br>';
echo $this->Form->input('password', ['required' => false]);
echo '<br>';
echo $this->Form->input('endereco_id', ['options' => $usersEnderecos]);
//echo $this->Form->input('role');
//echo $this->Form->input('dt_nascimento', ['label' => 'Data de nascimento', 'required' => false]);
//echo $this->Form->input('leitura_id', ['options' => $usersLeituras]);

echo $this->Form->end('Cadastrar');
echo $this->Form->end();
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

echo $this->Form->input('imagem', array('type' => 'file'));
echo '<br>';
echo $this->Form->submit('Enviar imagem');
