<?php
    include 'cadastro-pet.php';

        if(isset($_POST['usuario']) && isset($_POST['password'])){
            $usuario= htmlspecialchars($_POST['usuario']) ;
            $password= htmlspecialchars($_POST['password']);
            
        }
        function criptografia(){
            $password = 'web2022';
            if(md5($password) === '54e5edcb6b56a1fa7499855619a90051'){
                echo 'Senha correta';
                
            }
            }criptografia();

            function login(){
                
                $usuarioOficial = 'admin';
                $passOficial = '54e5edcb6b56a1fa7499855619a90051';
                if($usuarioOficial === 'admin' && $passOficial === '54e5edcb6b56a1fa7499855619a90051'){
                  
                    header('Location:/php_login/cadastro-pet.php');
                }else{
                    header('Location:/php_login/login.php?login=erro');
                }
            } login();
    
    
    ?>