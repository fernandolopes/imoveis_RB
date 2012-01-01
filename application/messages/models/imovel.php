<?php

return array(
    'nome' => array(
        'not_empty' => 'O Nome não pode ser nulo.',
        'min_length' => 'Nome deve ter no mínimo 4 caracteres.',
        'max_length' => 'Nome deve ter no máximo 60 caracteres.',
        'username_available' => 'This username is not available.',
    ),
    'logradouro' => array(
        'not_empty' => 'O Logradouro não pode ser nulo.',
        'min_length' => 'Logradouro deve ter no mínimo 4 caracteres.',
        'max_length' => 'Logradouro deve ter no máximo 100 caracteres.',
    ),
    'numero' => array(
        'not_empty' => 'O Número não pode ser nulo.',
        'numeric' => 'O Número não pode conter letras',
    ),
    'bairro' => array(
        'not_empty' => 'O Bairro não pode ser nulo.',  
    ),
    'cep' => array(
        'not_empty' => 'O CEP não pode ser nulo.',
        'exact_length' => 'O CEP deve conter 8 caracteres.',
        'numeric' => 'O CEP deve conter somente números',
    ),
    'cidade' => array(
        'not_empty' => 'A Cidade não pode ser nula.',
        'max_length' => 'Cidade deve ter no máximo 100 caracteres.',
    ),
    'uf' => array(
        'not_empty' => 'O UF não pode ser nulo.',
        'exact_length' => 'O UF deve ter 2 caracteres.',
        'alpha' => 'O UF deve conter somente letras.',
    ),
);
?>
