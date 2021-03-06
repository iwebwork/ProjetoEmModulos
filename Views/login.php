<html>
    <header>
        <meta charset="UTF-8">
        <title>Pagina de Login</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <!-- Custom styles for this template-->
        <link href="<?php echo BASE_URL;?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
    </header>
    <body class="bg-gradient-primary">
        <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem Vindo!</h1>
                                    </div>
                                        <div class="user" id="formLogin">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Digite seu email...">
                                            </div>
                                            <div class="form-group">
                                                <input name="senha" type="password" class="form-control form-control-user" id="senha" placeholder="Digite sua senha">
                                            </div>
                                            <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                            </div> -->
                                            <button id="enviar" class="btn btn-primary btn-user btn-block">Enviar</button>
                                            <div class="container-fluid d-lg-none" id="aviso">
                                                <div class="alert alert-danger alert-dismissible" id="myAlert">
                                                    <button id="fechar" href="#" class="close" onclick="fecharAlert()" >&times;</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- <hr> -->
                                        <!-- <div class="text-center">
                                            <a class="small" href="forgot-password.html">Esqueceu Senha?</a>
                                        </div> -->
                                        <!-- <div class="text-center">
                                            <a class="small" href="register.html">Create an Account!</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        
        
        <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/login.js"></script>
        
    </body>
</html>