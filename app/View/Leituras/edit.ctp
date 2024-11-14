<?php

echo $this->Html->tag('h1', 'Editar Leituras');
echo $this->Form->create('Leitura');
echo $this->Form->hidden('id');
echo $this->Form->input('user_id', array('type'=>'hidden'));
echo $this->Form->input('livro_id', ['options' => $livros, 'required' => false]);
echo $this->Form->input('situacao_leitura_id', ['options' => $situacaoLeituras, 'required' => false]);
echo $this->Form->input('resenha', ['required' => false, 'empty' => 'preencha', 'rows' => 4]);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);
