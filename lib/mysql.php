<?php
function conecta() {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'adotPet';
        $mysqli = mysqli_connect($host, $user, $password, $database);

        if (mysqli_connect_errno()) {
            return NULL;
        }else {
            return $mysqli;
        }
    }

function getSexo($int){
    switch($int){
        case 0 :
        return 'Fêmea';
        case 1:
        return 'Macho';
        default:
        return 'Indefinido';
    }
}

function getTipo($int){
    switch($int){
        case 0 :
        return 'Cachorro';
        case 1:
        return 'Gato';
        default:
        return 'Outros';
    }
}
        
    function listaPets() {
        $lista = [];
        $query = 'SELECT matricula, nome, sexo, raca, tipo, foto, descricao FROM pets;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)) {
                   
                   $pets = array('matricula' => (int) $row[0],
                    'nome' => $row[1], 'sexo' => getSexo((INT)$row[2]),
                    'raca' => $row[3], 'tipo' => getTipo((INT)$row[4]),  'foto' =>  $row[5],  'descricao' =>  $row[6]);
                   

                    array_push($lista, $pets);
                }
            }
        }
        return $lista;
    }

    function getStrTipo($str){
        switch($str){
            case 'Femea' :
                return 0;
            case 'Macho':
                return  1;
            case 'Indefinido':
                return  2;
            default:
                return 'Erro';
        }
    }

    function getStrSexo($str){
    
        switch($str){
            case 'Cachorro' :
                return 0;
            case 'Gato':
                return  1;
            case 'Outros':
                return  2;
            default:
                return 'Erro';
        }
    }

    function cadastraPet($nome, $strSexo, $raça, $strTipo, $foto, $descricao){
        $query = "INSERT INTO pets (nome, sexo, raca, tipo, foto, descricao)  
        values('" . $nome . "','" . getStrSexo($strSexo) . "'," . $raca . "," . getStrTipo($strTipo) ."," .$foto.","  . $descricao.");";
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            return $result;
           
        }else {
            return NULL;
        }
        
    }
   

   
?>