<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {
    
//    public function beforeFilter() {
//        parent::beforeFilter();
//        $this->Auth->allow('add', 'logout');
//    }
    
    public function index() {
        $dados =  $this->User->find('all');
        $this->set('dados', $dados);
        
        $pessoaCasa = $this->User->find('first',[
            'conditions' => [
                'uf' => 'RS'
            ]
        ]);
        $this->set('pessoaCasa', $pessoaCasa);
        
        
        
    }
    
    public function add() {
        debug($this->request->data);
        $this->loadModel('Endereco');
        
        $usersEnderecos = $this->Endereco->find('list', [
            'fields' => [
                'Endereco.id',
                'Endereco.logradouro'
            ]
            ]);
        
        $this->set('usersEnderecos', $usersEnderecos);
        
        if ($this->request->is('post') && !empty($this->request->data)){
            $this->User->create();
            if ($this->User->save($this->request->data)){
                $this->Flash->success(('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
}
