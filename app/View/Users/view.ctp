<?php


//echo $this->Html->image("file-earmark-person.svg", array(
//    "alt" => "",
//    
//));

echo $this->Html->tag('h1', $this->Html->image("leitor.png", array(
    "alt" => "",
)));
echo $this->Html->tag('h1', 'Detalhes do Usuário');

$colunas = array('id', 'Nome', 'Logradouro', 'UF','Localidade', 'Lidos', 'Lendo', 'Quero ler', 'Paginômetro');
$header = $this->Html->tableHeaders($colunas);
$leitura = Hash::get($dado, 'Leitura');
$detalhar = array();
    foreach ($dado['Endereco'] as $key => $value){
        $detalhar[] = array(
            $dado['User']['id'],
            $dado['User']['nome'],
            $dado['Endereco'][$key]['logradouro'],
            $dado['Endereco'][$key]['cidade'],
            $dado['Endereco'][$key]['uf'],
            $lidos,
            $lendo,
            $quero_ler,
            $this->Html->link($paginometro ? $paginometro : 0, array('controller' => 'leituras', 'action' => 'leitura_situacao_livros_lidos_relatorio'))
        );
    }

$body = $this->Html->tableCells($detalhar);
echo $this->Html->tag('table', $header . $body);
echo $this->Html->link(__('Voltar'), ['action' => 'index']);
echo '<br>';
echo $this->Html->link(__('Sair'), ['controller' => 'users', 'action' => 'logout']);

//echo $this->Html->css('forms');

