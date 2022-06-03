<?php

echo $this->Html->tag('h1', 'Login');
echo $this->Session->flash('auth');
echo $this->Form->create('User');
echo $this->Form->input('username', ['label' => 'Usuário', 'required' => false]);
echo $this->Form->input('password', ['label' => 'Senha', 'required' => false]);

echo $this->Form->end(__('Entrar') , ['validate' => true]);

echo $this->Html->link(__('Cadastrar Usuário'), ['action' => 'add']);
echo '<br>';
echo $this->Html->link(__('Recuperar Senha'), ['action' => 'recuperar_senha']);