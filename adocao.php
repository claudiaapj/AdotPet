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
                <th class="cor_sim">Matrícula</th>
                <th class="cor_nao">Nome</th>
                <th class="cor_sim">sexo</th>
                <th class="cor_nao">Raça</th>
                <th class="cor_sim">Tipo</th>
                <th class="cor_sim">Foto</th>
                <th class="cor_sim">Descrição</th>

            </tr>
            <?php
                for($i = 0; $i < count($pets); $i++){

                        echo '<td>'. $pets[$i]['matricula'] .'</td>';
                        echo '<td>'. $pets[$i]['nome'] .'</td>';
                        echo '<td>'. $pets[$i]['sexo'] .'</td>';
                        echo '<td> R$ '. $pets[$i]['raca'] .'</td>';
                        echo '<td> R$ '. $pets[$i]['tipo'] .'</td>';
                        echo '<td> R$ '. $pets[$i]['foto'] .'</td>';
                        echo '<td> R$ '. $pets[$i]['descricao'] .'</td>';
                        echo '<td>
                            <button onclick="deletar('.$pets[$i]['id'].')">Deletar</button>
                            <button onclick="editar('.$pets[$i]['id'].')">Editar</button>
                        </td>';
                    echo '</tr>';
                }
            ?>   
    </main>
    <footer>
        <p>Atividade proposta no curso Programador Web Senac</p>
        <p>Cláudia Aguilar</p>
    </footer>
    
</body>
</html>