<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {
    
    public $components = [
        'Qimage'
        ];
    
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
        
        
    }

    /*public function add() {
        $this->loadModel('Endereco');
        $this->loadModel('Leitura');


        $usersLeituras = $this->Leitura->find('list', [
            'fields' => [
                'Leitura.id',
                'Leitura.livro_id'
            ]
        ]);

        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->User->create();
            $this->Endereco->create();
            $this->request->data['Endereco']['user_id'] = $this->User->id;
            if ($this->User->saveAll($this->request->data) && $this->Endereco->saveAll($this->request->data)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->Qimage->watermark(array('file' => '/img/oculos_logo.png'));
        //$this->Qimage->copy(array('file' => $_FILES[''], 'path' => '/img/fotos/'));
        //$this->Qimage->copy(array('file' => $_FILES['imagem'], 'path' => '/img/'));
    }*/
    
    public function add() {
    if (!empty($this->request->data)) {
        $user = $this->User->save($this->request->data);
        if (!empty($user)) {
            $this->request->data['Endereco']['user_id'] = $this->User->id;

            $this->User->Endereco->save($this->request->data);
            $this->Flash->success(__('Usuário cadastrado com sucesso'));
            return $this->redirect(['action' => 'index']);
        }
    }
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
        
        $userLeituras = $this->Leitura->find('all', [
            'fields' => [
                'Livro.titulo'
            ],
            'conditions' => [
                'Leitura.user_id' => $this->request->params['pass']
            ],
        ]);
        
        //debug($userLeituras);

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
        
        $this->set(compact('dado', 'lidos', 'lendo', 'quero_ler', 'paginometro', 'userLeituras'));
        
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
        
       
        if ($this->request->is('post') && !empty($userEmail)) {

            $Email = new CakeEmail('gmail');
            $Email->from(array('testepython1204@gmail' => 'Estante Virtual'));
            $Email->to($userEmail);
            $Email->subject('Recuperação de senha');
            $Email->send('Click no link abaixo para recuperar sua senha');
            //debug($Email);
            echo 'E-mail enviado para '.$Email;
        }
        
    }
    
    public function teste(){
        echo 'teste';
    }
    
}
