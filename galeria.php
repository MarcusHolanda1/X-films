<?php include "cabecalho.php" ?>

<?php
$filme1 = [
    "titulo" =>
    "Godzilla vs. Kong",
    "nota" => 8.6,
    "sinopse" => "Em uma época em que os monstros andam na Terra, a luta da humanidade por seu futuro coloca Godzilla e Kong em rota de colisão que verá as duas forças mais poderosas da natureza no planeta se confrontarem em uma batalha espetacular para as idades. Enquanto Monarch embarca em uma missão perigosa em terreno desconhecido e descobre pistas sobre as origens dos Titãs, uma conspiração humana ameaça tirar as criaturas, boas e más, da face da terra para sempre.",
    "poster" => "https://www.themoviedb.org/t/p/w300/klAIFewuqcyEmH1SMtR2XbMyqzM.jpg"

];

$filme2 = [
    "titulo" =>
    "Coringa",
    "nota" => 10,
    "sinopse" => "Arthur Fleck trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e                   os mata. Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.",
    "poster" => "https://www.themoviedb.org/t/p/w300/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg"
];

$filme3 = [
    "titulo" =>
    "Jogador N° 1",
    "nota" => "10",
    "sinopse" => "Num futuro distópico, situado em 2044, Wade Watts, como o resto da humanidade, prefere a realidade virtual do jogo OASIS ao mundo real. No jogo, seus usuários devem descobrir a chave de um quebra-cabeça diabólico, baseado na cultura do final do século XX, para conquistar um prêmio de valor inestimável. Para vencê-lo, porém, Watts terá de abandonar a existência virtual e ceder a uma vida de amor e realidade da qual sempre tentou fugir.",
    "poster" => "https://www.themoviedb.org/t/p/w300/sN46sgCsWqwgHMu4mEtKJ19knVr.jpg"
];

$filme4 = [
    "titulo" =>
    "Fuja",
    "nota" => "9",
    "sinopse" => "Diane criou sua filha, que usa cadeira de rodas, mantendo-a totalmente isolada do mundo exterior. Mas quando Chloe descobre os segredos sinistros de sua mãe, tudo que ela acreditava ser verdade começa a desmoronar.",
    "poster" => "https://www.themoviedb.org/t/p/w300/3PFEWKFqfZZoxDpJNceL6XKzsGk.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>
    <nav class="nav-extended brown lighten-2">
        <div class="nav-wrapper ">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>



        </div>
        <div class="nav-header center">
            <h1>Xfilms</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent  brown lighten-1" style="color: rgb(255, 0, 0);">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test4">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </ul>

    <!--cards-->
    <div class="row">
        <?php
            foreach($filmes as $filme) : ?>

            <div class="col 12 m3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?php echo $filme["poster"] ?>">

                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i><?php echo $filme["nota"] ?>
                        </p>
                        <span class="card-title"><?php echo $filme["titulo"] ?></span>
                        <p><?php echo $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>

</html>