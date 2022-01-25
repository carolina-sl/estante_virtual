<?php

echo $this->Form->create('Livro');
echo $this->Form->input('titulo', ['label' => 'Título', 'required' => false]);
echo $this->Form->input('descricao', ['label' => 'Descrição', 'required' => false]);
echo $this->Form->input('autor', ['required' => false]);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();
