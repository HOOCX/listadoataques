<?php
    if ($_POST) {
        $url = $_POST['url'];
        $texto = <<<TEXTO
            <?php
            #Configurando el script
            define('APP_URL', '{$url}');
        TEXTO;
        file_put_contents('config.php', $texto);
        header("Location: ./web");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
        <input type="text" name="url" placeholder="Escriba la url del proyecto" id="">
        <button type="submit">Continuar</button>
    </form>
</body>
</html>