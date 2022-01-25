<?php

App::uses('AppController', 'Controller');

class LeiturasController extends AppController {
    
    public function index () {
        
//        $dados = $this->Leitura->find('all');
        
        $this->set('dados', $dados);
        
    }
    
}
