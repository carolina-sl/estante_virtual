<?php
    
    $colunas = array('id', 'Nome', 'Livro', 'Situação');
    $header = $this->Html->tableHeaders($colunas);
    
    $detalhar = array();
        $detalhar[] = array(
            $dado['Leitura']['id'],
            $dado['User']['nome'],
            $dado['Livro']['titulo'],
            $dado['SituacaoLeitura']['status']
        );

    $body = $this->Html->tableCells($detalhar);
    echo $this->Html->tag('table', $header . $body);
    echo $this->Html->link(__('Voltar'), ['action' => 'index']);
    
    echo $this->Html->css('forms');
    