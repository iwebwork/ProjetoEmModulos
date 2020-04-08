<?php
    namespace Models;

    use \Core\Model;

    class Usuarios extends Model{

        public function getNome()
        {
            $nome = "fulado";
            return $nome;
        }

        public function getQuantidade()
        {
            $sql = "SELECT COUNT(*) as c FROM usuarios";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $resultado = $sql->fetch();
                
            }else{
                $resultado['c'] = 0;
            }

            return $resultado['c'];
        }

        public function getNomes(){
            $sql = "SELECT * FROM usuarios";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $resultado = $sql->fetchAll();
                
            }else{
                $resultado = 0;
            }

            return $resultado;
        }

    }