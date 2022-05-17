<?php
    include './lib/mysql.php';
    $pets = listaPets();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <title>AdotPet</title>
</head>
<body>
    <header>

        <h1>AdotPet</h1>
       
        <nav>
            <a href="index.php">Home</a>
            <a href="adocao.php">Adoção</a>
            <a href="contato.ph">Contato</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <table>
            <tr>
                <th >Matrícula</th>
                <th >Nome</th>
                <th >sexo</th>
                <th >Raça</th>
                <th >Tipo</th>
                <th >Foto</th>
                <th >Descrição</th>
                <th >Deletar/Editar</th>

            </tr>
            <?php
                for($i = 0; $i < count($pets); $i++){
                    $foto = $pets[$i]['foto'];
                    if($foto === NULL){
                        $foto = '../assets/img/fotos/adot.png';
                        
                    }

                        echo '<td>'. $pets[$i]['matricula'] .'</td>';
                        echo '<td>'. $pets[$i]['nome'] .'</td>';
                        echo '<td>'. $pets[$i]['sexo'] .'</td>';
                        echo '<td> '. $pets[$i]['raca'] .'</td>';
                        echo '<td> '. $pets[$i]['tipo'] .'</td>';
                        echo '<td>  '. $pets[$i]['foto'] .'</td>';
                        echo '<td> '. $pets[$i]['descricao'] .'</td>';
                        echo '<td >
                                <button class = "tab-botao onclick="deletar('.$pets[$i]['matricula'].')"> Deletar </button>
                                <button class = "tab-botao onclick="editar('.$pets[$i]['matricula'].')"> Editar </button>
                            </td>';
                        echo '</tr>';
                    }
                ?>  
        </table> 
    </main>
    <footer>
        <p>Atividade proposta no curso Programador Web Senac</p>
        <p>Cláudia Aguilar</p>
    </footer>
    
</body>
</html>