<?php
    namespace Controllers;

    use \Core\Controller;

    class NotfoundController extends Controller{

        public function index()
        {
            $dados = array();
            
            $this->loadView('notfound',$dados);
        }

    }