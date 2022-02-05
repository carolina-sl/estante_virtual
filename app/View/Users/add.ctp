<?php

echo $this->Form->create('User');

echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);
echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo $this->Form->input('password', ['required' => false]);
echo $this->Form->input('endereco_id', ['options' => $usersEnderecos]);
echo $this->Form->input('role');
echo $this->Form->input('leitura_id', ['options' => $usersLeituras]);

echo $this->Form->end('Cadastrar');
echo $this->Form->end();
