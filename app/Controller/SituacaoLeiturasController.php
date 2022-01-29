<?php

App::uses('AppController', 'Controller');

class SituacaoLivrosController extends AppController {

    public function index() {
        $dados = $this->SituacaoLivro->find('all');
        $this->set('dados', $dados);

//        $dados = $this->SituacaoLivro->find('first',[
//            'conditions' => [
//                'uf' => 'RS'
//            ]
//        ]);
//        $this->set('dados', $dados);
    }

}
