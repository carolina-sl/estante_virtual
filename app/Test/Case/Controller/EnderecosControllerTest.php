<?php

class EnderecosControllerTest extends ControllerTestCase {

    public $fixtures = [
        'app.endereco',
        'app.user'
    ];

    public function testIndex() {
        $this->testAction('enderecos');
    }
    
    public function testAdd() {
        $this->testAction('enderecos/add');
    }

}
