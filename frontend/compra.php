<?php

if (isset($_COOKIE['login']))
{
    $nome = $_COOKIE['login'];
    $nome = strtoupper($nome);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/compra.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul id="nav">
            <li><a href="index.php"> Home</a></li>
            <li><a href="biblioteca.php"> Biblioteca </a></li>
            <li style="float:right"><?php if(isset($nome)){print '<a href="#">'.$nome.'</a></li>';}else{print '<a href="login.php">Logar</a></li>';}?>
            <li style="float:right"><?php if(isset($nome)){print'<a href="../backend/logout.php">LOGOUT</a>';}else{print '<a href ="cadastro_Cli.php">Cadastrar</a>';}?></li>
        </ul>
    </nav>
<main class="grid">

    <div class="livro-compra block">
        abacaxi
    </div>
    <div class="livro-informacao block">
        limao
    </div>
    <div class="livro-total block">
        morango
    </div>
    
</main>
    
    <footer>
        <div class="footer">
            <p>&copyDesenvolvimentoDeSistemas</p>
        </div>
    </footer>
    
</body>
</html>