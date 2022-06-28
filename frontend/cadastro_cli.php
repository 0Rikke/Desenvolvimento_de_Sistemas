<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=][, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastroCli.css">
    <title>Cadastro cliente</title>
</head>
<body>
    <nav>
        <a href="index.php"><img class = "seta"src="img/setinha.png" alt="seta para voltar a página"></a>
    </nav>
    <h1>Cadastro de Usuário</h1>
    <form action="../backend/inserirCliente.php" method ='POST'>
        
        <div class="inside">
            <div class="grid">  
                <div class="inp">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name ='nome' placeholder="NameExemple">
                </div>
                <div class="inp">
                    <label for="Lname">Sobrenome</label>
                    <input type="text" id="Lname" name ='sobrenome' placeholder="lastNameExample">
                </div>
            </div>
                <div class="inp">           
                    <label for="email">Email</label>
                    <input type="email" id="email" name='email' placeholder="EmailExample@gmail.com">
                </div>
            <div class="grid"> 
                <div class="inp">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha " name='senha' placeholder="Senha">
                </div>   
                <div class="inp"> 
                    <label for="senhaConf">Confirmar Senha</label>
                    <input type="password" id="senhaConf" placeholder="Confirme a Senha">
                </div>
            </div> 
            <div class="check">
                <label for="check">Manter logado</label>
                <input type="checkbox" name="check" id="check">
            </div> 
            <div class="inp">
                <button class="botao" type="submit">Cadastrar</button>
            </div>
            <div>
                <p class="inp P">Já possui uma conta uma?</p>
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