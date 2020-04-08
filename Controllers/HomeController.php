<?php
    namespace Controllers;

    use \Core\Controller;

    class HomeController extends Controller{

        public function index()
        {
           
            $usuarios = new \Models\Usuarios();
            $dados = array();
            $dados['lista'] = $usuarios->getNomes();
            //print_r($dados['lista']);
            $this->loadTempleteOne('home',$dados);

        }




    }