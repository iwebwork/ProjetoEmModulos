<?php
    namespace Controllers;

    use \Core\Controller;

    class HomeController extends Controller{

        public function index()
        {
            if(empty($_SESSION['nome'])){
                header("Location:".BASE_URL."/login");
            }

            $dados = array();
           
            $this->loadTempleteOne('home',$dados);

        }




    }