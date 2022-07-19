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
       <div class="backgorund-livro">
            <img src="img/111.jpg" alt="">
       </div>
    </div>
    <div class="livro-informacao block">
        <form action="compra.php">
            <label for="frete">Calcular Frete</label>
                <input type="text" name ="frete" placeholder="Digite seu CEP"><button type="submit" class="frete">Calcular</button>
        </form>
    </div>
    <div class="livro-total block">
        <h4>Titulo do livro | no caso de ecormeci aqui tem o titulo da venda tipo mercado livre</h4>
             <div>Avaliação | 4.6 *</div>   
                 <div class="prec">
                    <span>R$20,00</span>
                    <img src="img/frete.PNG" alt="">
                    <button type="button" class="botao-frete" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Calcuar Frete 
                    </button> 
                 </div>
                
            
                
            <div class="botoes">
                <button>Adicionar no Carrinho</button>
                <button>Comprar</button>
            </div>                
        

    </div>
    
</main>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    
    <footer>
        <div class="footer">
            <p>&copyDesenvolvimentoDeSistemas</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>