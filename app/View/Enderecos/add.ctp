<?php

echo $this->Form->create('Endereco');
echo $this->Form->input('logradouro', ['label' => 'Logradouro', 'required' => false]);
echo $this->Form->input('bairro', ['label' => 'Bairro', 'required' => false]);
echo $this->Form->input('numero', ['label' => 'Numero', 'required' => false]);
echo $this->Form->input('complemento', ['label' => 'Complemento', 'required' => false]);
echo $this->Form->input('cidade', ['label' => 'Cidade', 'required' => false]);
echo $this->Form->input('uf', ['label' => 'UF', 'required' => false]);
echo $this->Form->submit('Cadastrar');
echo $this->Form->end();

echo $this->Html->link(__('Início'), ['controller' => 'inicio', 'action' => 'pagina_inicial']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['action' => 'logout']);

logradouro
bairro
numero
complemento
cidade
uf
