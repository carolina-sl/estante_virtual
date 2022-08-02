<?php

App::uses('AppController', 'Controller');

class RelatoriosController extends AppController {
    
    public function relatorio_users() {

        $this->loadModel('Livro');
        $this->loadModel('User');
        $this->loadModel('Leitura');
        $this->loadModel('Endereco');

        
        $dados_User = $this->User->find('all', [
            'fields' => [
                'User.id'
            ],
            'order' => [
                'User.id'
            ]
        ]);
        
        $dados_Livro = $this->Livro->find('all', [
            
        ]);
        
        $dados_Leitura = $this->Leitura->find('all', [
            
        ]);
        
        $dados_Endereco = $this->Endereco->find('all', [
            
        ]);
        

        $this->set('dados_User', $dados_User);
        $this->set('dados_Livro', $dados_Livro);
        $this->set('dados_Endereco', $dados_Endereco);
        
        
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
    
    public function teste() {
        
        $this->loadModel('Endereco');
        $this->loadModel('Leitura');
        $this->loadModel('Livro');
        $this->loadModel('Resenha');
        $this->loadModel('User');
        $this->loadModel('Leitura2');
        
        $testeEndereco = $this->Endereco->find('all', []);
        $testeLeitura = $this->Leitura->find('all', []);
        $testeLivro = $this->Livro->find('all', []);
        $testeResenha = $this->Resenha->find('all', []);
        $testeUser = $this->User->find('all', []);
        
//        debug($testeEndereco);
//        debug($testeLeitura);
//        debug($testeLivro);
//        debug($testeResenha);
        debug($testeUser);
//        debug($testeLeitura2);
        
    }

}
