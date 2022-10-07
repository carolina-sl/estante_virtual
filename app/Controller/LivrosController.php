 <?php

App::uses('AppController', 'Controller');

class LivrosController extends AppController {

    public function index() {
        $this->loadModel('Leitura');
        $dados = $this->Livro->find('all');

        if (!empty($this->request->data && $this->request->is('post', 'put'))) {

            $dados = $this->Livro->find('all', [
                'conditions' => [
                    'Livro.titulo' => $this->request->data['Livro']['titulo']
                ],
                    //'group' => 'Livro.id'
            ]);
        }
        
        $this->set('dados', $dados);
    }

    public function add() {

        if ($this->request->is('post') && !empty($this->request->data)) {
            $this->Livro->create();
            if ($this->Livro->save($this->request->data)) {
                $this->Flash->success(__('Livro cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function edit($id = null) {

        if ($this->request->is(array('put', 'post'))) {

            if ($this->Livro->save($this->request->data)) {
                $this->Flash->success(__('Livro editado com sucesso'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->success(__('Livro não pode modificado'));
        }
        $this->request->data = $this->Livro->findById($id);
    }

    public function view($id = null) {
        $dado = $this->Livro->findById($id);
        $this->set(compact('dado'));
    }

}
