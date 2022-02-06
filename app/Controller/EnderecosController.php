<?php

App::uses('AppController', 'Controller');

class EnderecosController extends AppController {

    public function index() {
        $dados = $this->Endereco->find('all');
        $this->set('dados', $dados);
        debug($dados);
    }

}
