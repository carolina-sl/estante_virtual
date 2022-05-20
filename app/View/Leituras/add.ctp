<?php

echo $this->Form->create('Leitura');

//echo $this->Form->input('titulo', ['label' => 'Título', 'required' => false]);
echo $this->Form->input('user_id', ['label' => 'Usuário', 'required' => false]);
echo $this->Form->input('livro_id', ['required' => false]);
echo $this->Form->input('situacao_leitura_id', ['required' => false]);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();

//debug($leiturasUsers);

debug($situacao_leituras);
