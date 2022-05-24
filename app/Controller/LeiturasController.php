<?php

App::uses('AppController', 'Controller');

class LeiturasController extends AppController {

    public function index() {
        
        $this->loadModel('User');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');
        $this->loadModel('Leitura');
        
        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Leitura.id',
                'User.id',
                'User.nome',
                'Livro.id',
                'Livro.titulo',
                'SituacaoLeitura.status'
                
            ],
            'join' => [
                'SituacaoLeitura' => [
                    'Leitura.situacaoo_leitura_id' => 'SituacaoLeitura.id' 
                ]
            ]
        ]);
        //debug($dados);
        $this->set('dados', $dados);
    }
    
    public function add() {
        
        $this->loadModel('User');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');
        
        $users = $this->User->find('list', [
            'fields' => [
                'User.id',
                'User.nome'
            ]
        ]);

        $livros = $this->Livro->find('list', [
            'fields' => [
                'Livro.id',
                'Livro.titulo'
            ]
        ]);
        
        $situacaoLeituras = $this->SituacaoLeitura->find('list', [
            'fields' => [
                'SituacaoLeitura.id',
                'SituacaoLeitura.status'
            ]
        ]);

        //$this->set(compact('leiturasUsers', 'leiturasLivros', 'leiturasSituacaoLeituras'));
        
        $this->set('users', $users);
        $this->set('livros', $livros);
        $this->set('situacaoLeituras', $situacaoLeituras);
        
//        $this->set('leiturasUsers', $leiturasUsers);
//        $this->set('leiturasLivros', $leiturasLivros);
//        $this->set('leiturasSituacaoLeituras', $leiturasSituacaoLeituras);
        
        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->Leitura->create();
            if ($this->Leitura->save($this->request->data)) {
                $this->Flash->success(__('Leitura cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
    }

    public function view($id = null) {
        $dado = $this->Leitura->findById($id);
        
        $this->set('dado', $dado);
    }

}
