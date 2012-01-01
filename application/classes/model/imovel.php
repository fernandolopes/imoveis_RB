
<?php defined('SYSPATH') or die('No direct script access.');

class Model_Imovel extends ORM{
    
    public function rules()
    {
        return array(
            'nome' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 60)),
            ),
            'logradouro' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 100)),
            ),
            'numero' => array(
                array('not_empty'),
                array('numeric'),
            ),
           
            'bairro' => array(
                array('not_empty'),
            ),    
            'cep' => array(
                array('not_empty'),
                array('exact_length', array(':value', 8)),
                array('numeric'),
            ),
            'cidade' => array(
                array('not_empty'),
                array('max_length', array(':value', 100)),
            ),
            
            'uf' => array(
                array('not_empty'),
                array('exact_length', array(':value', 2)),
                array('alpha'),
            ),
        );
    }
    
}

?>

