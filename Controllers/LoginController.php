<?php
    namespace Controllers;

    use \Core\Controller;

    class LoginController extends Controller{

        public function index()
        {
            $dados = array();
           
            $this->loadView('login',$dados);

        }




    }