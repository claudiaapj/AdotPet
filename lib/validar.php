<?php


    function login($usuarioOficial, $passOficial){
       
        if($usuarioOficial === 'admin' && $passOficial === '54e5edcb6b56a1fa7499855619a90051'){
        header('Location:./cadastro-pet.php');
        }else{
            header('Location:./login.php?login=erro');
            }
    } 
    ?>