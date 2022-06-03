<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {
    
    public $components = array('Qimage');
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout', 'add');
        
    }

    public function index() {
        $dados = $this->User->find('all', [
            'conditions' => [],
            'group' => 'User.id'
        ]);

        if (!empty($this->request->data && $this->request->is('post', 'put'))) {
            
            $dados = $this->User->find('all', [
                'conditions' => [
                    'User.nome' => $this->request->data['User']['nome']
                ],
                'group' => 'User.id'
            ]);
        }
        
        $this->set('dados', $dados);
        
        /*$Email = new CakeEmail('gmail');
        $Email->from(array('carolina.lauffer@gmail.com' => 'Estante Virtual'));
        $Email->to('carolzinha_serafim@yahoo.com.br');
        $Email->subject('teste de envio de e-mail');
        $Email->send('lalalala');
        debug($Email);*/
        
    }

    public function add() {
        $this->loadModel('Endereco');
        $this->loadModel('Leitura');
        //debug($this->User);

        $usersEnderecos = $this->Endereco->find('list', [
            'fields' => [
                'Endereco.id',
                'Endereco.logradouro'
            ]
        ]);

        $usersLeituras = $this->Leitura->find('list', [
            'fields' => [
                'Leitura.id',
                'Leitura.livro_id'
            ]
        ]);

        $this->set('usersEnderecos', $usersEnderecos);
        $this->set('usersLeituras', $usersLeituras);

        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
        
        $this->Qimage->watermark(array('file' => '/img/oculos_logo.png'));
        //$this->Qimage->copy(array('file' => $_FILES[''], 'path' => '/img/fotos/'));
        //$this->Qimage->copy(array('file' => $_FILES['imagem'], 'path' => '/img/'));
    }

    public function edit($id = null) {
        $this->loadModel('Endereco');
        
        $usersEnderecos = $this->Endereco->find('list', [
            'fields' => [
                'Endereco.id',
                'Endereco.logradouro',
            ]
        ]);
        
        $this->set('usersEnderecos', $usersEnderecos);
        if ($this->request->is(array('put', 'post'))) {

            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Usuário editado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->success(__('Usuário não pode modificado'));
        }
        $this->request->data = $this->User->findById($id);
    }

    public function delete($id = null) {

        if (!$this->request->is('post')) {

            $this->User->delete($id);
            $this->Flash->success('O usuário com id: ' . $id . ' foi deletado.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function view($id = null) {
        $dado = $this->User->findById($id);
        
        $this->loadModel('Leitura');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');

        $lidos = $this->User->Leitura->find('count', [
            'conditions' => [
                'User.id' => $id,
                'Leitura.situacao_leitura_id' => 2
            ]
        ]);
        
        $lendo = $this->User->Leitura->find('count', [
            'conditions' => [
                'User.id' => $id,
                'Leitura.situacao_leitura_id' => 3
            ]
        ]);
        
        $quero_ler = $this->User->Leitura->find('count', [
            'conditions' => [
                'User.id' => $id,
                'Leitura.situacao_leitura_id' => 4
            ]
        ]);
        
        $paginometro = $this->User->userPaginometro($id);
        
        $this->set(compact('dado', 'lidos', 'lendo', 'quero_ler', 'paginometro'));
        
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(
                    __('Senha ou usuario incorretos.')
            );
        }
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
    public function recuperar_senha() {
        
        echo 'Carolina lauffer';
    }

}
