<?php
    namespace Models;

    use \Core\Model;

    class Usuario extends Model{

        private $nome;

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome(){
            return $this->nome;
        }

        public function selecionaUsuario($email, $senha){

            if(!empty($email)){
                $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                $sql = $this->pdo->query($sql);

                if($sql->rowCount() > 0){
                    return $sql->fetch();
                }else{
                    return false;
                }

            }else{
                return false;
            }

        }

    }