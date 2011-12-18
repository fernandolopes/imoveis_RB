<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index(){
            
		$this->response->body('Carminha');
	}
        
        public function action_editar(){
                echo 'fernando';
        }

} // End Welcome
