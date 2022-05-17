
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <title>Cadastro Pet</title>
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
       <H2>Cadastro para adoção</H2>

       <form class="cadastrar" action="./lib/validar.php" method="post"  enctype="multipart/form-data">
           <ul>
               <li>
               <label for="imagem">Imagem:</label>
                <input type="file" name="foto"/>
                <br/>
               </li>
                <li>
                    <label> Nome: </label>
                    <input name="nome" type="text" id="nome">
                </li>
                <li>
                <label> Sexo: </label>
                <select id="box-sexo" name="sexo">
                        <option value="selecione">Selecione uma opção</option>
                        <option value="femea">FÊMEA</option>
                        <option value="macho">MACHO</option>
                        <option value="indefinido">INDEFINIDO</option>
                </select>
                </li>
                <li>
                    <label> Raça: </label>
                    <input name="raca" type="text" id="raca">
                </li>
                <li>
                <label> Tipo: </label>
                <select id="box-tipo" name="tipo">
                        <option value="selecione">Selecione uma opção</option>
                        <option value="cachorro">CACHORRO</option>
                        <option value="gato">GATO</option>
                        <option value="outros">OUTROS</option>
                </select>
                </li>
                <li>
                    <label> Descrição: </label>
                    <input name="descricao" type="text" id="descricao">
                </li>
                <li class="btn">
                    <input id="cadastro-btn" type="submit" value="Cadastrar">
                    <input id="cadastro-btn" type="button" value="Cancelar" onclick="bt_cancelar()">
                </li>
            </ul>
    </form>

    </main>
    <footer>
        <p>Atividade proposta no curso Programador Web Senac</p>
        <p>Cláudia Aguilar</p>
    </footer>
    
</body>
</html>