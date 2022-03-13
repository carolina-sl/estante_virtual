<?php

App::uses('AppController', 'Controller');

class LeiturasController extends AppController {

    public function index() {
        
        $this->loadModel('User');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');
        
        $dados = $this->Leitura->find('first');

        $this->set('dados', $dados);
        debug($dados);
    }

    public function view($id = null) {
        $dado = $this->Leitura->findById($id);
        
        $this->set('dado', $dado);
        
    }

}
