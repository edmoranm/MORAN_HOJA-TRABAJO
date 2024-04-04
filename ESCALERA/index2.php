<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Escalera</title>
<style>

    body {
        font-family: Verdana, Tahoma, sans-serif;
        background-image: url(./pxfuel.jpg);
        background-size: cover;
       
    }
    .escalera {
        margin-top: 20px;
        margin-left: 35%;
    }

    .bloque {
        display: inline-block;
        width: 70px; 
        height: 70px; 
        background-color: gray;
        margin-right: 5px;
        border: 2px solid black; 
        box-shadow: 10px 10px 10px red;
        text-align: center; 
        line-height: 70px; 
        color: #fff;
        font-size: 24px;
    }

    h1 {
        color: white; 
        text-shadow: 7px 10px 7px red;
    
    }

    
</style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pisos = $_POST['pisos'];

        if ($pisos >= 5 && $pisos <= 8) {
            echo "<h1>Escalera de $pisos pisos:</h1>";
            echo "<div class='escalera'>";
            
            $letras = ["T", "O", "D", "O", "S", "T", "E", "N", "E", "M", "O", "S", "1", "A", "N", "G", "E", "L", "E", "N", "E", "L", "C", "I", "E", "L", "O", "Q", "U", "E", "A", "M", "A", "M", "O", "S"]; // Oración formada por letras
            $total_bloques = 0; 

            for ($i = 0; $i < $pisos; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "<div class='bloque'>" . $letras[$total_bloques % count($letras)] . "</div>";
                    $total_bloques++;
                }
                echo "<br>";
            }
            echo "</div>";
        } else {
            echo "<h1>Por favor, ingresa un número de pisos válido (entre 5 y 8).</h1>";
        }
    }
    ?>
</body>
</html>