<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Clientes extends Controller {
    
    
    protected $view;


    public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
            $this->view = View::factory('layout/template');
            
        }

        public function action_index(){
            
            //$view = View::factory('layout/template');
            $this->view->title = 'Clientes';
            
            $clientes = ORM::factory('cliente')->find_all();
            
            $this->view->body = new View('clientes/index');
            $this->view->body->clientes = $clientes;
            
            $this->response->body($this->view);
                
	}
        
        public function action_edit(){
            
                $id = $this->request->param('id');
                
                $cliente = ORM::factory("cliente",$id);
                $values = $cliente->as_array();
                
                $values['data_nascimento'] = format::date_mysql2human($values['data_nascimento']);
                
                $view = View::factory('layout/template');
            
                $view->title = 'Editar cliente';

                $view->body = View::factory('clientes/edit')
                        ->set('values', $values)
                        ->bind('errors', $errors);
                
                $post = $this->request->post();

                if( !empty ($post) ){
                    
                    $post['cpf'] = preg_replace("/\D/", "", $post['cpf']);
                    $post['data_nascimento'] = format::date_human2mysql($post['data_nascimento']);

                    $validation = Validation::factory($post);
                
                    $cliente->values($post, array('nome','sobrenome','data_nascimento','sexo','cpf','rg'));
                    
                    try {
                        
                        $cliente->save($validation);

                        $this->request->redirect("clientes/index");
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
            
            $cliente = ORM::factory('cliente',$id)->delete();
            
            $this->request->redirect("clientes/index");
        }
        
        public function action_create(){
            $post = $this->request->post();
            
            $view = View::factory('layout/template');
            
            $view->title = 'Criar clientes';
            
            $view->body = View::factory('clientes/create')
                    ->set('values', $post)
                    ->bind('errors', $errors);
            
            if( !empty ($post) ){
                
                $post['cpf'] = preg_replace("/\D/", "", $post['cpf']);
                $post['data_nascimento'] = format::date_human2mysql($post['data_nascimento']);

                $validation = Validation::factory($post);
                
                    $cliente = ORM::factory("cliente")
                            ->values($post, array('nome','sobrenome','data_nascimento','sexo','cpf','rg'));
                    
                    try {
                        $cliente->save($validation);

                        $this->request->redirect("clientes/index");
                    }
                    catch (ORM_Validation_Exception $e)
                    {
                        $errors = $e->errors('models');
                    }
                
            }
                    
            $this->response->body($view); 
        }
        

} // End Welcome
