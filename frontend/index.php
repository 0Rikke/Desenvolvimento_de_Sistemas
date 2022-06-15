<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul id="nav">
            <li><a href="index.php"> Home</a></li>
            <li><a href="biblioteca.php"> Biblioteca </a></li>
            <li style="float:right"><a href="login.php">Logar</a></li>
            <li style="float:right"><a href="cadastro_cli.php">Cadastrar</a></li>
        </ul>
    </nav>
<!-- 
    ta funcionando o carosel 

    so tem que cuidar para as imagens serem do mesmo tamanha 

-->
<div >
    <h2 id="txtDes">Destaques</h2>
</div>

<div class="car">
<div style="width: 35% !important;" id="carouselExampleCaptions" class="carousel slide w-25 borImg" data-bs-ride="carousel">
    <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
        <img src="img/livro1.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-dark"></h5>
            <p class="text-dark">Detalhes do livro</p>
        </div>
        </div>
        <div class="carousel-item ">
        <img src="img/livro2.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-dark"></h5>
            <p class="text-dark">Detalhes do livro</p>
        </div>
        </div>
        <div class="carousel-item ">
        <img src="img/livro3.png" class="d-block w-100 " alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-dark"></h5>
            <p class="text-dark">Detalhes do livro</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden ">Next</span>
    </button>
 </div>
    
 <!-- 
     mudar dinamicamente esse as coisas a baixo
     e melhora o css tmb

-->
 
    <div class="text">
        <div class="title">
            <h3>Título</h3>
        </div>
        <div class="grid" >
            <img id="arp" src="img/livro1.png" alt="ImagemRelacionadaAoLivro">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae voluptatem tempore iusto quidem asperiores ratione mollitia sequi, itaque ullam illum? Delectus facilis saepe eligendi eum vel nesciunt accusamus dolorum necessitatibus?</p>
        </div>    
            <ul class="mid">
                <li>Categoraias</li>
                <li>Quantidade de estrelas</li>
                <li><a href="">Mais detalhes</a></li>
                
            </ul>
        
    </div>

</div>


    <div class="sobre">
        <div>
            <h2 id="txtsobre">Biblioteca Eitelven</h2>
        </div>

        <div class="main">
            <div class="iten1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.Amet illo, ex tempore enim maxime ipsam quis sunt beatae  esse animi, eum perspiciatis reiciendis cupiditate temporaveritatis omnis eveniet, fuga et?

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque iure repellendus, quo qui quia architecto quae velit blanditiis illum nisi rerum odio, expedita consequuntur cupiditate laboriosam, debitis inventore hic illo?<br> <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, iste recusandae tenetur sit tempore, quidem repellendus perferendis cupiditate consequuntur asperiores libero excepturi expedita nobis. Aspernatur aut culpa commodi quas natus.
                </p>
            </div>
            <div class="iten2">
                <img src="img/biblioteca.png" alt="ImagemDaBiblioteca">
            </div>
            
        </div>

    </div>
    

    <footer>
        <div class="footer">
            <p>&copyDesenvolvimentoDeSistemas</p>
        </div>
    </footer>
     

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>