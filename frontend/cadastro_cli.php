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
    <form action="inserir.php" method="$_POST">
        <fieldset>
        <div class="grid">  
            <div class="inp">
                <label for="name">Nome</label>
                <input type="text" id="name" placeholder="NameExemple">
            </div>
            <div class="inp">
                <label for="Lname">Sobrenome</label>
                <input type="text" id="Lname" placeholder="lastNameExample">
            </div>
        </div>
            <div class="inp">           
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="EmailExample@gmail.com">
            </div>
        <div class="grid"> 
            <div class="inp">
                <label for="senha">Senha</label>
                <input type="password" id="senha " placeholder="Senha">
            </div>   
            <div class="inp"> 
                <label for="senhaConf">Confirmar Senha</label>
                <input type="password" id="senhaConf" placeholder="Confirme a Senha">
            </div>
        </div>     
            <div class="inp">
                <button class="botao" type="submit">Cadastrar</button>
            </div>
         
        
            
            
            
            
            
        </fieldset>
    </form>
</body>
</html>