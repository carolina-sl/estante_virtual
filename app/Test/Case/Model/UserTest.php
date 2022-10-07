<?php

class UserTest extends CakeTestCase {

    public $fixtures = [
        'app.user'
    ];
    public $Livro = null;

    public function setUp() {
        $this->User = ClassRegistry::init('User');
    }

    public function testExisteModel() {
        $this->assertTrue(is_a($this->User, 'User'));
    }

    public function testEmptyNome() {
        $data = ['nome' => null];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['nome' => ''];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['nome' => '   '];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);
    }

    public function testEmptyUsername() {
        $data = ['username' => null];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['username' => ''];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['username' => '   '];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);
    }

    public function testEmptyPassword() {
        $data = ['password' => null];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['password' => ''];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['password' => '   '];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);
    }

    public function testSituacaoLeiturasUsers() {
        // @Todo: enteder qual o comportamento esperado desta função
        $this->markTestIncomplete('testSituacaoLeiturasUsers not implemented yet.');
    }
}
