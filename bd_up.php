<?php

$host = "localhost";

$user = "root";

$password = "";

$bd = "filmes";

$mysqli = new mysqli($host, $user, $password, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;


    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        0, 
        'Godzilla vs. Kong',
        'https://www.themoviedb.org/t/p/w300/klAIFewuqcyEmH1SMtR2XbMyqzM.jpg',
        'Em uma época em que os monstros andam na Terra, a luta da humanidade por seu futuro coloca Godzilla e Kong em rota de colisão 
        que verá as duas forças mais poderos da natureza no planeta se confrontarem em uma batalha espetacular para as idades.
         Enquanto Monarch embarca em uma missão perigosa em terreno desconhecido e descobre pistas sobre as origens dos Titãs, 
         uma conspiração humana ameaça tirar as   criaturas, boas e más, da face da terra para sempre.',
         9.9
    )";

        $sql = "SELECT * FROM filmes";
        $rs = $bd->query($sql);

        while($filme = $rs->fetchArray()){
            print_r($filme);
        }

 ?>