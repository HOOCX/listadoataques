<?php
class plantilla
{
    static $instancia;
    public static function aplicar(){
        if(!self::$instancia){
            self::$instancia = new plantilla();
        }
        return self::$instancia;
    }

    function __construct()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Listado de Ataques</title>
        </head>

        <body>
            <div class="container mt-4" >
                <div style="min-height: 400px;">

            <?php
        }

        function __destruct()
        {

            ?>
                </div>
                <div>
                    <hr>
                    Website by Hans, copyright 2022
                </div>
            </div>
        </body>

        </html>

<?php

        }
    }

?>