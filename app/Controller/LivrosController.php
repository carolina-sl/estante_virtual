<?php

App::uses('AppController', 'Controller');

class LivrosController extends AppController {

    public function index() {
        $this->loadModel('Leitura');
        $dados = $this->Livro->find('all');
        
        $this->set('dados', $dados);
    }

    public function add() {

        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->Livro->create();
            if ($this->Livro->save($this->request->data)) {
                $this->Flash->success(__('Livro cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
    
    public function view($id = null) {
        $dado = $this->Livro->findById($id);
        
        $this->loadModel('Leitura');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');

        $detalheLeitura = $this->Livro->find('all', [
           
        ]);

        debug($detalheLeitura);
        $this->set(compact('dado'));
    }

}
