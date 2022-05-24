<?php

echo $this->Html->tag('h1', 'Editar livro');

echo $this->Form->create('Livro', array('label' => 'Livro'));
echo $this->Form->hidden('id');
echo $this->Form->input('titulo', array('label' => 'Título', 'required' => false)); 
echo $this->Form->input('descricao', array('label' => 'Descrição'));
echo $this->Form->input('autor', array('label' => 'Autor', 'required' => false));
echo $this->Form->input('qtd_pagina', array('label' => 'Quantidade de páginas'));

echo $this->Form->submit('Cadastrar', array('validate' => true));
echo $this->Form->end();

echo $this->Html->link(__('Voltar'), ['action' => 'index']);
