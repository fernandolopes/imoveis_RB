<?php

return array(
    'nome' => array(
        'not_empty' => 'O Nome não pode ser nulo.',
        'max_length' => 'Nome so pode conter 60 caracteres.',
    ),
    'email' => array(
        'not_empty' => 'O e-mail não pode ser nulo.',
        'email' => 'E-mail inválido!',

    ),
    'senha' => array(
        'not_empty' => 'A senha não pode ser nulo.',
        'max_length' => 'Nome so pode conter 8 caracteres.', 
    ),
    
    'username' => array(
        'not_empty' => 'Nome de usuário não pode ser nulo.',
        'max_length' => 'Nome so pode conter 30 caracteres.',
    ), 
);

?>

