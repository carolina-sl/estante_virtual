<?php

echo $this->Form->create('Livro');
echo $this->Form->input('titulo', ['label' => 'Título', 'required' => false]);
echo $this->Form->input('descricao', ['label' => 'Descrição', 'required' => false]);
echo $this->Form->input('autor', ['required' => false]);
echo $this->Form->input('qtd_pagina', ['required' => false]);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
