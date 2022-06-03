<?php

echo $this->Html->tag('h1', 'Cadastro de Leituras');

echo $this->Form->create('Leitura');

//echo $this->Form->input('titulo', ['label' => 'Título', 'required' => false]);
echo $this->Form->input('user_id', ['label' => 'Usuário', 'required' => false, 'empty' => 'preencha']);
echo $this->Form->input('livro_id', ['required' => false, 'empty' => 'preencha']);
echo $this->Form->input('situacao_leitura_id', ['required' => false, 'empty' => 'preencha']);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

