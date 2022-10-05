<?php

echo $this->Form->create('User');
echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo '<br>';
echo $this->Form->input('email', ['label' => 'E-mail', 'required' => false]);
echo '<br>';
echo $this->Form->input('password', ['required' => false]);
echo '<br>';
echo $this->Form->input('Endereco.logradouro', ['label' => 'Logradouro', 'required' => false]);
echo $this->Form->input('Endereco.bairro', ['label' => 'Bairro', 'required' => false]);
echo $this->Form->input('Endereco.numero', ['label' => 'Numero', 'required' => false]);
echo $this->Form->input('Endereco.complemento', ['label' => 'Complemento', 'required' => false]);
echo $this->Form->input('Endereco.cidade', ['label' => 'Cidade', 'required' => false]);
echo $this->Form->input('Endereco.uf', [
    'label' => 'UF',
    'type' => 'select',
    'options' => $listaEnderecoUfs,
    'required' => false,
    ]);

echo $this->Form->end('Cadastrar');

echo $this->Form->end();
echo '<br>';
echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

echo $this->Form->input('imagem', array('type' => 'file'));
echo '<br>';
echo $this->Form->submit('Enviar imagem');

