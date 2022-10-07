<?php

class UsersControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.user',
        'app.leitura',
        'app.livro',
        'app.situacao_leitura'
    ];

    public function testIndex() {
        $this->testAction('users');

        $dados = Hash::get($this->vars, 'dados');
        $countDados = count($dados);

        $this->assertNotEmpty($dados);
        $this->assertTrue(($countDados == 2), "total usuarios esperado 2 recebido {$countDados}");
    }

    public function testGetAdd() {
        $this->testAction('users/add');

//       @ToDo: revisar esta funcionalidade 
//       $listaEnderecoUfs = Hash::get($this->vars, 'listaEnderecoUfs');
//       $this->assertNotEmpty($listaEnderecoUfs);
    }

    public function testGetEdit() {
        $this->testAction('users/edit/1');

//       $usersEnderecos = Hash::get($this->vars, 'usersEnderecos');
//       $this->assertNotEmpty($usersEnderecos);
    }

    public function testDelete() {
        $this->markTestIncomplete('testDelete not implemented yet.');
    }

    public function testView() {
        $this->testAction('users/view/1');

        $dadoUser = Hash::get($this->vars, 'dado.User');
        $lidos = Hash::get($this->vars, 'lidos');
        $lendo = Hash::get($this->vars, 'lendo');
        $queroLer = Hash::get($this->vars, 'quero_ler');
        $paginometro = Hash::get($this->vars, 'paginometro');

        $this->assertNotEmpty($dadoUser);
        $this->assertTrue(($lidos == 1), "lidos esperado 1 recebido {$lidos}");
        $this->assertTrue(($lendo == 1), "lendo esperado 1 recebido {$lendo}");
        $this->assertTrue(($queroLer == 1), "quero ler esperado 1 recebido {$queroLer}");
        $this->assertTrue(($paginometro == 10), "paginometro esperado 10 recebido {$queroLer}");
    }

    public function testLogin() {
        $this->markTestIncomplete('testLogin not implemented yet.');
    }

    public function testLogout() {
        $this->markTestIncomplete('testLogout not implemented yet.');
    }

    public function testRecuperarSenha() {
        $this->markTestIncomplete('testRecuperarSenha not implemented yet.');
    }

    public function testLeiturasLivrosLidosPaginometro() {
        $this->markTestIncomplete('testLeiturasLivrosLidosPaginometro not implemented yet.');
    }

}
