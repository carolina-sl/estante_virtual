<?php

App::uses('AppController', 'Controller');

class RelatoriosController extends AppController {
    
    public function relatorio_users() {

        $this->loadModel('Livro');
        $this->loadModel('User');
        $this->loadModel('Leitura');
        $this->loadModel('Endereco');

        // virtualFields
        $dados = $this->User->find('first', [
            'conditions' => [
            ],
            'fields' => [
                'total_uf',
                'total_users',
                'maior_idade',
            ]
        ]);

        $this->set('dados', $dados);
        
    }

    public function relatorio_leituras() {

        $this->loadModel('Leitura');
        $this->loadModel('SituacaoLeitura');
        $this->loadModel('Livro');
        $this->loadModel('Endereco');
        $this->loadModel('User');

        $virtualFieldsTotalsLeituras = $this->Leitura->find('all', [
            'fields' => [
                'total_leituras',
                'total_situacao_leitura_lido',
                'total_situacao_leitura_lendo',
                'total_situacao_leitura_quero_ler'
            ]
        ]);

        $this->set('virtualFieldsTotalsLeituras', $virtualFieldsTotalsLeituras);
        
    }

}
