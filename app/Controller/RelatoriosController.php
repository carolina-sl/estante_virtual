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
    
    public function total_leituras(){
        $this->loadModel('Leitura');
        
        $relatorioTotalLeituras = $this->Leitura->find('all', [
            'fields' => [
                'User.nome',
                'Livro.titulo',
                'SituacaoLeitura.status'
                /*'Leitura.id',
                'total_leituras',*/
            ],
            'conditions' => [
                //'Leitura.situacao_leitura_id' => 4
            ],
            'contain' => [
                'SituacaoLeitura' => [
                    'SituacaoLeitura.id' => 'Leitura.situacao_leitura_id'
                ],
                'fields' => [
                    'SituacaoLeitura.id',
                    'SituacaoLeitura.status'
                ],
                'Livro' => [
                    'Livro.id' => 'Leitura.livro_id'
                ]
            ],
            'group' => [
                //'Leitura.livro_id'
            ]
        ]);
        
        $this->set('relatorioTotalLeituras', $relatorioTotalLeituras);
        
    }

}
