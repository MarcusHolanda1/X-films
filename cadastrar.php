<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended" style="background: rgb(0,0,0);
    background: linear-gradient(217deg, rgba(0,0,0,1) 11%, rgba(23,23,23,1) 35%, rgba(241,241,241,1) 96%);">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>



        </div>
        <div class="nav-header center">
            <h1>Xfilms</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken1 " style="color: rgb(255, 0, 0);">
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

    <!--Cadastro-->

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title">Cadastrar filme</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="titulo" type="text" class="validate" require>
                            <label for="titulo">Titulo do filme</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="input-field col s2">
                            <input id="nota" type="number" step=".1" min="0" max="10" class="validate" require>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <!--Capa do cadastro-->
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>CAPA</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>


                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light btn" href="galeria.php">Cancelar</a>
                    <a class="waves-effect waves-light btn">Cadastrar</a>

                </div>
            </div>

        </div>
    </div>




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>