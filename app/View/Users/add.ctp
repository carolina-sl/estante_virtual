<?php

echo $this->Form->create('User');

echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo '<br>';
echo $this->Form->input('email', ['label' => 'E-mail', 'required' => false]);
echo '<br>';
echo $this->Form->input('password', ['required' => false]);
echo '<br>';

echo $this->Form->create('Endereco');
echo $this->Form->input('logradouro', ['label' => 'Logradouro', 'required' => false]);
echo $this->Form->input('bairro', ['label' => 'Bairro', 'required' => false]);
echo $this->Form->input('numero', ['label' => 'Numero', 'required' => false]);
echo $this->Form->input('complemento', ['label' => 'Complemento', 'required' => false]);
echo $this->Form->input('cidade', ['label' => 'Cidade', 'required' => false]);
echo $this->Form->input('uf', ['label' => 'UF', 'required' => false]);
echo $this->Form->input('uf', ['label' => 'UF', 'required' => false]);

echo $this->Form->end('Cadastrar');
echo $this->Form->end();
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

echo $this->Form->input('imagem', array('type' => 'file'));
echo '<br>';
echo $this->Form->submit('Enviar imagem');
