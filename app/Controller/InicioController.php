<?php

App::uses('AppController', 'Controller');


class InicioController extends AppController {
    
    public function pagina_inicial(){
        $this->loadModel('Livro');
        $this->loadModel('Endereco');
        $this->loadModel('User');
        $this->loadModel('Leitura');
        
//        debug($this->Livro);
//        debug($this->Endereco);
//        debug($this->User);
//        debug($this->Leitura);
        
        
    }
}

