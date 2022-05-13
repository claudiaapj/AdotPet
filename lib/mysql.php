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

    function listaPets() {
        $lista = [];
        $query = 'SELECT matricula, nome, sexo, raca, tipo, foto, descricao FROM pets;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)) {
                   
                   $pets = array('matricula' => (int) $row[0],
                    'nome' => $row[1], 'sexo' => getSexo($int) $row(2),
                    'raca' => $row[3], 'tipo' =>  $row[4],  'foto' =>  $row[5],  'descricao' =>  $row[6]);
                    function getSexo($int){
                        switch($int){
                            case 0 :
                            return 'fêmea';
                            case 1:
                            return 'Macho';
                            default:
                            return 'Indefinido';
                        }
                    }

                    array_push($lista, $pets);
                }
            }
        }
        return $lista;
    }
?>