<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller{
   
 protected $view;


    public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
            $this->view = View::factory('layout/template');
            
        }

        public function action_index(){
            
            //$view = View::factory('layout/template');
            $this->view->title = 'Home';
            $this->view->body = new View('home/index');            
            $this->response->body($this->view);
                
	}   
}

?>
