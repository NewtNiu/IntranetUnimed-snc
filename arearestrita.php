<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon_unimed.png" type="image/x-icon">
    <title>Area Restrita</title>
    <link rel="stylesheet" href="arearestrita_styles.css">
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend>AREA RESTRITA</legend>
                <br>
                <div class="imputBox">
                    <label for="nomdeusuario">Nome de Usuário</label>
                    <input type="text" name="nomdeusuario" id="nomedeusuario" class="inputUser" required autofocus="true" placeholder="Digite seu Usuário">
                </div>
                <br>
                <div class="imputBox">
                    <label for="senhaUsuario">Senha</label>
                    <input type="text" name="senhaUsuario" id="senhaUsuario" class="senhaUser" required autofocus="true" placeholder="Digite a sua Senha">
                </div>
                <br>
                <a href="index.php"><input type="button" class="btnSubmit" value="ENTRAR"></a>
            </fieldset>
        </form>
    </div>
</body>
</html>