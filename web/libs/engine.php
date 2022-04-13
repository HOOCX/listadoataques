<?php

include('../config.php');
include("plantilla.php");
if (!defined('APP_URL')) {
    define('APP_URL', '');
}

function obtenerAtaques(){

    $url = APP_URL.'/api/api.php?opt=list';
    $result = file_get_contents($url);
    if ($result === false) {
        echo "
            <script>
                    window.location = '../install.php';
            </script>
        ";
        exit();
    }
    $result = json_decode($result);
    return $result;
}
?>