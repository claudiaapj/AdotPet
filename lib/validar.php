<?php
    include 'mysql.php';


    function login($usuarioOficial, $passOficial){
       
        if($usuarioOficial === 'admin' && $passOficial === '54e5edcb6b56a1fa7499855619a90051'){
        header('Location:../cadastro-pet.php');
        }else{
            header('Location:../login.php?login=erro');
            }
    } 

    
    if(isset($_POST)  && isset($_POST['nome'])
    && isset($_POST['sexo']) && isset($_POST['raca']) && isset($_POST['tipo']) && isset($_POST['descricao'])){
        $foto = $_FILES["foto"];
        $foto = "";
        $nome = strtoupper($_POST['nome']);
        $raca = strtoupper($_POST['raca']);
        $descricao = strtoupper($_POST['descricao']);
        $tipo = strtoupper ($_POST['tipo']);
        $sexo = ($_POST['sexo']);
        
        $localMov = '../assets/img/fotos/'; // para moveu a img
        $localMovMsql = './assets/img/fotos/'; // salvo no banco
        if($foto != NULL && $foto['size']>0){
    
            
            $nomeImg =  $foto['name'];
            $destination = $localMov . $nomeImg;
            if(move_uploaded_file ($fotos['tmp_name'], $destination)){
                $foto = localMovMsql;                                                              
            }
    
        }
        // as variavéis são passadas como paramentro para função de cadastro no
        // banco de dados 
        
        $resposta = cadastraPet($nome, $strSexo, $raca, $tipo, $foto, $descricao);
        // se a resposta for TRUE sinal que foi cadastrado com sucesso.
        // caso contrário redireciona para página de cadastro novamente.
        var_dump($resposta);
        if($resposta === NULL){
            header('Location: ../cadastro-pet.php?erro=1');  
        } else if($resposta === false){
            header('Location: ../cadastro-pet.php?erro=2');
            
        }else {
            // sucesso redirecionar para a lista.
            header('Location: ../adocao.php'); 
        }
    }
   

    ?>