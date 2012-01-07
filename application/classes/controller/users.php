<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller {
    protected $view;

    public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
            $this->view = View::factory('layout/template');
            
        }

        public function action_index(){
            
            //$view = View::factory('layout/template');
            $this->view->title = 'Users';
            
            $usuarios = ORM::factory('user')->find_all();
            
            $this->view->body = new View('users/index');
            $this->view->body->usuarios = $usuarios;
            
            $this->response->body($this->view);
                
	}
        
        public function action_edit(){
            
                $id = $this->request->param('id');
                
                $usuario = ORM::factory("user",$id);
                $values = $usuario->as_array();
                
                $view = View::factory('layout/template');
            
                $view->title = 'Editar usuario';

                $view->body = View::factory('users/edit')
                        ->set('values', $values)
                        ->bind('errors', $errors);
                
                $post = $this->request->post();

                if( !empty ($post) ){
                    
                    $validation = Validation::factory($post);
                
                    $usuario->values($post, array('nome','email','senha','username'));
                    
                    try {
                        
                        $usuario->save($validation);

                        $this->request->redirect("users/index");
                    }
                    catch (ORM_Validation_Exception $e)
                    {
                        $errors = $e->errors('models');
                    }

                }

                $this->response->body($view); 
        }
        
        public function action_delete(){
            
            $id = $this->request->param('id');
            
            $usuario = ORM::factory('user',$id)->delete();
            
            $this->request->redirect("users/index");
        }
        
        public function action_create(){
            $post = $this->request->post();
            
            $view = View::factory('layout/template');
            
            $view->title = 'Criar usuario';
            
            $view->body = View::factory('users/create')
                    ->set('values', $post)
                    ->bind('errors', $errors);
            
            if( !empty ($post) ){
               
                $validation = Validation::factory($post);
                
                    $usuario = ORM::factory("user")
                            ->values($post, array('nome','email','senha','username'));
                    
                    try {
                        $usuario->save($validation);

                        $this->request->redirect("users/index");
                    }
                    catch (ORM_Validation_Exception $e)
                    {
                        $errors = $e->errors('models');
                    }
                
            }
                    
            $this->response->body($view); 
        }
    
}

?>
