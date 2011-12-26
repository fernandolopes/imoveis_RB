<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cliente extends ORM{
    
    public function rules()
    {
        return array(
            'nome' => array(
                array('not_empty'),
                array('max_length', array(':value', 60)),
            ),
            'sobrenome' => array(
                array('not_empty'),
                array('max_length', array(':value', 60)),
            ),
            'cpf' => array(
                array('not_empty'),
            ),
            'rg' => array(
                array('not_empty'),
            ),
        );
    }
    
}

?>
