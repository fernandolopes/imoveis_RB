<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM{
    
    public function rules()
    {
        return array(
            'nome' => array(
                array('not_empty'),
                array('max_length', array(':value', 60)),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
            ),
            'senha' => array(
                array('not_empty'),
                array ('max_length', array (':value',8)),
            ),
            'username' => array(
                array('not_empty'),
                array ('max_length', array (':value',30)),
            ),
       );
    } 
}

?>
