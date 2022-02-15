<?php

echo $this->Html->tag('h1', 'Detalhes do Usuário');
    
    $colunas = array('id', 'Nome', 'Localidade', 'UF', 'Lidos', 'lendo', 'Quero ler');
    $header = $this->Html->tableHeaders($colunas);
    
    $detalhar = array();
        $detalhar[] = array(
            $dado['User']['id'],
            $dado['User']['nome'],
            $dado['Endereco']['cidade'],
            $dado['Endereco']['uf']
//            date("d/m/Y H:i:s", strtotime($dado['User']['created'])),
        );

    $body = $this->Html->tableCells($detalhar);
    echo $this->Html->tag('table', $header . $body);
    echo $this->Html->link(__('Voltar'), ['action' => 'index']);
    
    echo $this->Html->css('forms');
    
