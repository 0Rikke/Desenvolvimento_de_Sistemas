<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=][, initial-scale=1.0">
    <title>Cadastro cliente</title>
</head>
<body>
    <form action="inserir.php" method="$_POST">
        <fieldset>
            <label for="name">Username</label>
            <input type="text" id="name">
            <label for="email">Email</label>
            <input type="email" id="email">
            
            <label for="senha">Senha</label>
            <input type="password" id="senha">
            <label for="senhaConf">Confirmar Senha</label>
            <input type="password" id="senhaConf">
            <button type="submit">Cadastrar</button>
        </fieldset>
    </form>
</body>
</html>