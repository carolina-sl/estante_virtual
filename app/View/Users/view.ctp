<?php


echo $this->Html->image("file-earmark-person.svg", array(
    "alt" => "",
    
));

echo $this->Html->tag('h1', 'Detalhes do Usuário');
   
    $colunas = array('id', 'Nome', 'Localidade', 'UF', 'Lidos', 'Lendo', 'Quero ler', 'Paginômetro');
    $header = $this->Html->tableHeaders($colunas);
    $leitura = Hash::get($dado, 'Leitura');

        $detalhar = array();
            $detalhar[] = array(
                $dado['User']['id'],
                $dado['User']['nome'],
                $dado['Endereco']['cidade'],
                $dado['Endereco']['uf'],
                $lidos,
                $lendo,
                $quero_ler,
                $paginometro ? $paginometro : 0
            );
    
    $body = $this->Html->tableCells($detalhar);
    echo $this->Html->tag('table', $header . $body);
    echo $this->Html->link(__('Voltar'), ['action' => 'index']);
    
    echo $this->Html->css('forms');
    
