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
            'order' => [
                'Leitura.id' => 'asc'
            ]
        ]);
        
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
    
    public function leitura_situacao_livros_lidos_relatorio() {
        
        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Leitura.id',
                'User.id',
                'User.nome',
                'Livro.id',
                'Livro.titulo',
                'SituacaoLeitura.status'
                
            ],
            'conditions' => [
                'Leitura.situacao_leitura_id' => 2
            ],
            'order' => [
                'Leitura.id' => 'asc'
            ]
        ]);
        
        $this->set('dados', $dados);
    }
    
    public function leitura_situacao_livros_lendo_relatorio() {
        
        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Leitura.id',
                'User.id',
                'User.nome',
                'Livro.id',
                'Livro.titulo',
                'SituacaoLeitura.status'
                
            ],
            'conditions' => [
                'Leitura.situacao_leitura_id' => 3
            ],
            'order' => [
                'Leitura.id' => 'asc'
            ]
        ]);
        
        $this->set('dados', $dados);
    }
    
    public function leitura_situacao_livros_quero_ler_relatorio() {
        
        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Leitura.id',
                'User.id',
                'User.nome',
                'Livro.id',
                'Livro.titulo',
                'SituacaoLeitura.status'
                
            ],
            'conditions' => [
                'Leitura.situacao_leitura_id' => 4
            ],
            'order' => [
                'Leitura.id' => 'asc'
            ]
        ]);
        
        $this->set('dados', $dados);
    }
    
    

}
