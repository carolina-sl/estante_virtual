<?php

App::uses('AppController', 'Controller');

class SituacaoLeiturasController extends AppController {

    public function index() {
        $dados = $this->SituacaoLeitura->find('all');
        debug($dados);
        $this->set('dados', $dados);
    }

}
