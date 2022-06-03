<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class EnderecosController extends AppController {

    public function index() {
        //$dados = $this->Endereco->find('all');
        
        $dados = $this->Endereco->find('all', [
            'conditions' => [],
            'group' => 'Endereco.id'
        ]);

        if (!empty($this->request->data && $this->request->is('post', 'put'))) {
            
            $dados = $this->Endereco->find('all', [
                'conditions' => [
                    'Endereco.logradouro' => $this->request->data['Endereco']['logradouro']
                ],
                'group' => 'Endereco.logradouro'
            ]);
        }
        
        $this->set('dados', $dados);
    }
    
    public function add() {
        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->Endereco->create();
            if ($this->Endereco->save($this->request->data)) {
                $this->Flash->success(__('Endereco cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

}
