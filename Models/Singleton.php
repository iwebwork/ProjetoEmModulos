<?php
    namespace Models;

    use Core\Model;

    class Singleton extends Model{
        private $nomeUsuario;
        
        public static function getInstance(){
            static $instance = null;

            if($instance === null){
                $instance = new Singleton();
            }
            return $instance;
        }

        private function __construct(){

        }

        public function __destruct()
        {
           $this->setNomeUsuario('');
        }

        public function setNomeUsuario($n){
            $this->nomeUsuario = $n;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }


    }