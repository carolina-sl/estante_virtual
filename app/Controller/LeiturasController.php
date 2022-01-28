<?php

App::uses('AppController', 'Controller');

class LeiturasController extends AppController {
    
    public function index () {
        
//        $dados = $this->Leitura->User->find('all', [
//            'conditions' => [
//                'User.nome' => 'Carolina Serafim Lauffer',
//                'Leitura.situacao_id' => 2
//            ]
//        ]);
        
        $dados = $this->Leitura->find('all');
        
        $this->set('dados', $dados);
        
    }
    
}
