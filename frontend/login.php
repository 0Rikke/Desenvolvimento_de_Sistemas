<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=][, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroCli.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastro cliente</title>
</head>
<body>
    <nav>
        <a href="index.php"><img class = "seta"src="img/setinha.png" alt="seta para voltar a página"></a>
    </nav>
    <h1>Login</h1>
    <form action="inserir.php" method="$_POST">
        
        <div class="inside">
  
           
                <div class="inp">
                    <label for="name">Nome</label>
                    <input type="text" id="name" placeholder="NameExemple">
                </div>             

                <div class="inp">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha " placeholder="Senha">
                </div>   
    
            <div class="check">
                <label for="check">Manter logado</label>
                <input type="checkbox" name="check" id="check">
            </div> 

            <div class="inp">
                <button class="botao"><a href="login.php">Logar</a></button>
            </div>   
        </div>
        
    </form>

    <footer>
        <div class="footer">
            <p>&copyDesenvolvimentoDeSistemas</p>
        </div>
    </footer>
</body>
</html>