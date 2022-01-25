<?php

App::uses('Model', '    AppModel');

class Livro extends Model {
    
    public $name = 'Livro';
    public $validate = [
        'titulo' => 'notBlank',
        'descricao' => 'notBlank',
        'autor' => 'notBlank'

    ];
}
