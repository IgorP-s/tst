
<?php
    if(isset($_POST['submit']))
    {

        include_once('processar.php');

        $tele = $_POST['tele'];
        $senha = $_POST['senha'];

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Login</title>
</head>
<body>
    <div class="telalogin">

        <form id="form" method="post" action="processar.php">
            <h2>LS_SHOP</h2>
            <h3>"Faça login para continuar"</h3>

                <br>

            <label for="tele" class="labelInput">Telefone</label>
            <input type="tel" name="tele" id="tele" class="inputUser" required>
            
                <br><br>

            <label for="senha" class="labelInput">Senha</label>
            <input type="password" name="senha" id="senha" class="inputUser" required>
            
                <br><br>

            <button id="enviar">Enviar</button> 
                <br><br> 
        </form>
        <button id="cancelar">Cancelar</button> 
    </div>
<script src="scritp.js"></script>
</body>
</html>