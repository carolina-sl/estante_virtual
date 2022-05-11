<?php

App::uses('AppController', 'Controller');

class LeiturasController extends AppController {

    public function index() {
        
        $this->loadModel('User');
        $this->loadModel('Livro');
        $this->loadModel('SituacaoLeitura');
        $this->loadModel('Leitura');
        
        $dados = $this->Leitura->find('all', [
            'fields' => [
                'Leitura.id',
                'User.id',
                'User.nome',
                'Livro.id',
                'Livro.titulo',
                'SituacaoLeitura.status'
                
            ],
            'join' => [
                'SituacaoLeitura' => [
                    'Leitura.situacaoo_leitura_id' => 'SituacaoLeitura.id' 
                ]
            ]
        ]);
        debug($dados);
        $this->set('dados', $dados);
    }

    public function view($id = null) {
        $dado = $this->Leitura->findById($id);
        
        $this->set('dado', $dado);
    }

}
