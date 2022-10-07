<?php

class UserTest extends CakeTestCase {

    public $fixtures = [
        'app.user',
       // 'app.leitura',
       // 'app.situacao_leitura',
    ];
    public $User = null;

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

    public function testValidatePassword() {

        $data = ['password' => '123'];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);

        $data = ['password' => 'abcd'];
        $saved = $this->User->save($data);
        $this->assertFalse($saved);
    }

    public function testSituacaoLeiturasUsers() {
        // @Todo: enteder qual o comportamento esperado desta função
        $this->markTestIncomplete('testSituacaoLeiturasUsers not implemented yet.');
    }

    public function testUserPaginometro() {

        // @Todo: revisar funcionalidade
        $this->markTestIncomplete('testUserPaginometro not implemented yet.');

        $userId = 1;
        $result = $this->User->userPaginometro($userId);

        $this->assertEquals('10', $result);
    }
}
