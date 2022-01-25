<?php

echo $this->Form->create('User');

echo $this->Form->input('nome', ['label' => 'Nome', 'required' => false]);

echo $this->Form->input('username', ['label' => 'CPF', 'required' => false]);
echo $this->Form->input('password', ['required' => false]);
echo $this->Form->input('role', array('options' => $usersEnderecos));
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();
