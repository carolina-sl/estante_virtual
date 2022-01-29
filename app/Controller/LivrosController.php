<?php

App::uses('AppController', 'Controller');

class LivrosController extends AppController {

    public function index() {
        $dados = $this->Livro->find('all');

        $this->set('dados', $dados);
    }

    public function add() {

        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->Livro->create();
            if ($this->Livro->save($this->request->data)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

}
