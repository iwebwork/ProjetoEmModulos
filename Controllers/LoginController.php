<?php
    namespace Controllers;

    use \Core\Controller;
use Models\singleton;
use Models\Usuario;

class LoginController extends Controller{

        public function index()
        {
            $dados = array();
           
            $this->loadView('login',$dados);

        }

        public function loginAction()
        {
            $json = array(
                'success' => false,
                'msg' =>'',
            );

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $Singleton = Singleton::getInstance();
                $usuario = new Usuario();   
                $resposta = $usuario->selecionaUsuario(addslashes($_POST['email']), addslashes(md5($_POST['senha'])));
                if(!empty($resposta['nome'])){
                    $usuario->setNome($resposta['nome']);
                    $Singleton->setNomeUsuario($usuario->getNome());
                    $json['success'] = true;
                    $json['msg'] = "Usuario ".$Singleton->getNomeUsuario()." logado com sucesso";
                    $_SESSION['nome'] = $Singleton->getNomeUsuario();
                }else if($resposta === false){
                    $json['success'] = false;
                    $json['msg'] = 'Usuario não existe';
                }

            }else{
                $json['success'] = false;
                $json['msg'] = "Digite o email e/ou senha";
            }
            echo json_encode($json);
            exit;
            // return json_encode($json['msg']);

        }




    }