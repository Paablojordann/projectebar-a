<!DOCTYPE html>
<html lang="es">
<head>
<?php

$host     = "sql110.infinityfree.com";         
$user     = "if0_38744709";      
$password = "FCBarca1999 ";   
$db       = "if0_38744709_XXX";  

// Crear la conexión
$conn = new mysqli($host, $user, $password, $db);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
    <meta charset="UTF-8">
    <title>FC Barcelona</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header, footer {
            background-color: #004d98;
            color: #fff;
            padding: 20px 0;
        }
        main {
            padding: 40px 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenidos a la web del FC Barcelona</h1>
    </header>
    <main>
        <?php
        // Mensaje de bienvenida dinámico
        $mensaje = "¡Visca el Barça!";
        echo "<p>$mensaje</p>";
        ?>
        <p>En este sitio encontrarás noticias, historia y toda la pasión del FC Barcelona.</p>
    </main>
    <footer>
        <?php 
            echo "<p>&copy; " . date("Y") . " FC Barcelona. Todos los derechos reservados.</p>"; 
        ?>
    </footer>
</body>
</html>
