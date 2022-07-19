<?php

require "../backend/lib/classLivro.php";

if (isset($_COOKIE['login'])) {
    $nome = $_COOKIE['login'];
    $nome = strtoupper($nome);
}

$livro = new Livro();

$livros = $livro->buscar();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/biblio.css">

    <title>Document</title>

</head>

<body>
    <nav>
        <ul>
            <li><a id="a" href="index.php"> Home</a></li>
            <li style="float:right"><?php if (isset($nome)) {
                                        print '<a href="#">' . $nome . '</a></li>';
                                    } else {
                                        print '<a href="login.php">Logar</a></li>';
                                    } ?>
            <li style="float:right"><?php if (isset($nome)) {
                                        print '<a href="../backend/logout.php">LOGOUT</a>';
                                    } else {
                                        print '<a href ="cadastro_Cli.php">Cadastrar</a>';
                                    } ?></li>
        </ul>
    </nav>



    <div class="biblio">

        <nav class="nav-bibli">
            <ul>
                <li> <label class="label-nav" for="check1">Mais Relevantes:</label> <input type="checkbox" id="check1"></li>
                <li><label class="label-nav" for="check2">Mais Populares:</label> <input type="checkbox" id="check2"></li>
                <li><label class="label-nav" for="check3">Lançamentos:</label> <input type="checkbox" id="check3"></li>
                <li style="float:right;"><input class="lab-pesq" type="search"> <button class="pesquisa" type="submits">Pesquisar</button></li>
            </ul>
        </nav>





        <div class="main">

            <!-- gerar divs com estilos aleatorios, tamnha, cor etc.-->
            <div class="bookshelf">
                <form action="compra.php" method="POST">
                    <!--

                criar essas divs com javascript usando o php pra puxar do banco e botar 
                um indentificador junto para passar por post para na outra pagina pegar esse indentificador
                e botar as informações na tela

                                    
                -->
                
                
                    <?php
                    foreach ($livros as $livro) {
                        echo 
                        '<div class="livro">
                             
                                <button type="submit" name ="id" value = "' . $livro['id'] . '" >
                                    
                                    <p>' . $livro['nome'] . '</p>
                                </button>
                            </div>';
                    }

                    ?>

                </form>


            </div>








        </div>









    </div>



    <footer>
        <div class="footer">
            <p>&copyDesenvolvimentoDeSistemas</p>
        </div>
    </footer>

    <!-- JavaScript Bundle with Popper -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>