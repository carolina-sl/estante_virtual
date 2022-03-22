<?php

class UserFixture extends CakeTestFixture {

    public $name = 'User';
    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'nome' => ['type' => 'string', 'length' => 255],
        'username' => ['type' => 'string', 'length' => 11],
        'password' => ['type' => 'string', 'length' => 255],
        'role' => ['type' => 'string', 'length' => 20],
        'created' => 'datetime',
        'modified' => 'datetime',
        'endereco_id' => ['type' => 'integer'],
        'leitura_id' => ['type' => 'integer'],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'usuario',
                'username' => 'usuario',
                'password' => 'password',
                'role' => '1',
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s"),
                'endereco_id' => '1',
                'leitura_id' => '1'
            ],
            [
                'id' => 2,
                'nome' => 'usuario2',
                'username' => 'usuario2',
                'password' => 'password2',
                'role' => '2',
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s"),
                'endereco_id' => '1',
                'leitura_id' => '1'
            ]
        ];
        parent::init();
    }

}
