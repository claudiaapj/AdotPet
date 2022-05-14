<?php
    include 'mysql.php';


    function login($usuarioOficial, $passOficial){
       
        if($usuarioOficial === 'admin' && $passOficial === '54e5edcb6b56a1fa7499855619a90051'){
        header('Location:./cadastro-pet.php');
        }else{
            header('Location:./login.php?login=erro');
            }
    } 

    
    if(isset($_POST) && isset($_POST['matricula']) && isset($_POST['nome'])
    && isset($_POST['sexo']) && isset($_POST['raca']) && isset($_POST['tipo']) && isset($_POST['descricao'])){
        $nome = strtoupper($_POST['nome']);
        $raca = strtoupper($_POST['raca']);
        $descricao = strtoupper($_POST['descricao']);
        $resposta = cadastraPet($nome, $sexo, $raca, $tipo, $descricao);
        if($resposta === NULL || $resposta === false){
            header('Location: ../cadastro-pet.php?erro=1');  
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../adocao.php'); 
        }
    } 

    var_dump($_DELETE);
    

    ?>