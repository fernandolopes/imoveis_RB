<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Imoveis extends Controller {
    
    
    protected $view;


    public function __construct(Request $request, Response $response) {
            parent::__construct($request, $response);
            $this->view = View::factory('layout/template');
            
        }

        public function action_index(){
            
            $this->view->title = 'Imoveis';
            
            $imoveis = ORM::factory('imovel')->find_all();
            
            $this->view->body = new View('imoveis/index');
            $this->view->body->imoveis = $imoveis;
            
            $this->response->body($this->view);
                
	}
        
        public function action_edit(){
            
                $id = $this->request->param('id');
                
                $imovel = ORM::factory("imovel",$id);
                $values = $imovel->as_array();
                
                $view = View::factory('layout/template');
            
                $view->title = 'Editar imóvel';

                $view->body = View::factory('imoveis/edit')
                        ->set('values', $values)
                        ->bind('errors', $errors);
                
                $post = $this->request->post();

                if( !empty ($post) ){
                    
                    $post['cep'] = preg_replace("/\D/", "", $post['cep']);

                    $validation = Validation::factory($post);
                
                    $imovel->values($post, array('nome','logradouro','numero','complemento','bairro','cidade','uf','cep'));
                    
                    try {
                        
                        $imovel->save($validation);

                        $this->request->redirect("imoveis/index");
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
            
            $imovel = ORM::factory('imovel',$id)->delete();
            
            $this->request->redirect("imoveis/index");
        }
        
        public function action_create(){
            $post = $this->request->post();
            
            $view = View::factory('layout/template');
            
            $view->title = 'Criar imóveis';
            
            $view->body = View::factory('imoveis/create')
                    ->set('values', $post)
                    ->bind('errors', $errors);
            
            if( !empty ($post) ){
                
                $post['cep'] = preg_replace("/\D/", "", $post['cep']);

                $validation = Validation::factory($post);
                
                    $imovel = ORM::factory("imovel")
                            ->values($post, array('nome','logradouro','numero','complemento','bairro','cidade','uf','cep'));
                    
                    try {
                        $imovel->save($validation);

                        $this->request->redirect("imoveis/index");
                    }
                    catch (ORM_Validation_Exception $e)
                    {
                        $errors = $e->errors('models');
                    }
                
            }
                    
            $this->response->body($view); 
        }
        

} // End Welcome
