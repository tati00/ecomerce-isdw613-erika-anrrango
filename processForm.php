<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submit Contact</title>
</head>
<body>
        <?php
                if(isset($_POST["nombre"]) && $_POST["nombre"] != "" 
                        && isset($_POST["edad"]) && $_POST["edad"] != ""
                        && isset($_POST["dirección"]) && $_POST["dirección"] != ""
                        && isset($_POST["correo"]) && $_POST["correo"] != ""
                        && isset($_POST["comentario"]) && $_POST["comentario"] != ""){
                        echo("Nombre: " . $_POST["nombre"] . "<br />");
                        echo("Edad: " . $_POST["edad"] . "<br />");
                        echo("Direcci&oacute;n: " . $_POST["dirección"] . "<br />");
                        echo("Correo: " . $_POST["correo"] . "<br />");
                        echo("Comentario: " . $_POST["comentario"] . "<br />");
                }else{
                        echo "Todos los campos requeridos";
                }
        ?>
        <!--<?php
                /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nombre = $_POST["nombre"];
                        $edad = $_POST["edad"];
                        $direccion = $_POST["dirección"];
                        $correo = $_POST["correo"];
                        $comentario = $_POST["comentario"];

                        echo "Nombre: " . $nombre . "<br>";
                        echo "Edad: " . $edad . "<br>";
                        echo "Direccion: " . $direccion . "<br>";
                        echo "Correo: " . $correo . "<br>";
                        echo "Comentario: " . $comentario . "<br>"; }*/
        ?>-->
</body>
</html>