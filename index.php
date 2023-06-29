<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
<form action="imc.php" method="post">
    <input type="text" name="campo_nome"><br><br>
    <input type="text" name="campo_peso"><br><br>
    <input type="text" name="campo_altura"><br><br>
    <input type="text" name="campo_idade"><br><br>
    <input type="submit" name="botao_calcular" value="Calcular">
</form>

    <br><br>

    <?php
    if(isset($_GET['texto'])){
        echo 'O resultado é: ' . $_GET['texto'];
    }
    ?>
</form>
</body>
</html>