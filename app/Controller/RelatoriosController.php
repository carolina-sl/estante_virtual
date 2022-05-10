<?php

App::uses('AppController', 'Controller');

class RelatoriosController extends AppController {
    
    public function relatorio_users() {

        $this->loadModel('Livro');
        $this->loadModel('User');
        $this->loadModel('Leitura');
        $this->loadModel('Endereco');

        // virtualFields
        $dados = $this->User->find('first', [
            'conditions' => [
            ],
            'fields' => [
                'total_uf',
                'total_users',
                'maior_idade'
            ]
        ]);
        debug($dados);
        $this->set('dados', $dados);

    }
    
	
	public function paginometro() {
	
		$dados = $this->User->find('all', [
			'contain' => [
				'Leitura'
			]
		]);
	}
    

}
