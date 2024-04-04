<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Damas</title>
    <link rel="shortcut icon" href="icono.png">
    <style>
        body {
            background-image: url('./chess-board-glass-black-white-surface-741528-wallhere.com.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        h1 {
            text-align: center;
            font-family: Verdana;
            font-size: 60px;
            color: blue;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            border: solid greenyellow;
            box-shadow: 0 0 25px red;
        }

        th, td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            position: relative;
        }

        .casilla.negra {
            background-color: #000000; /* Negro */
        }

        .casilla.gris {
            background-color: #dddddd; /* Gris */
        }

        .casilla.verde {
            background-color: #4caf50; /* Verde */
        }

        .ficha {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: auto; /* Centro horizontalmente */
            top: 50%; /* Ajuste vertical */
            transform: translateY(-50%); /* Centra verticalmente */
            position: absolute;
            left: 0;
            right: 0;
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease;
        }

        .ficha:hover {
            transform: scale(1.2);
        }

        .ficha-roja {
            background-image: url('./Imagen\ de\ WhatsApp\ 2024-04-03\ a\ las\ 23.53.38_c4a07c43.jpg'); /* Ruta a tu imagen roja */
        }

        .ficha-azul {
            background-image: url('./incognito-icon-browse-private-vector-260nw-1462596698.webp'); /* Ruta a tu imagen azul */
        }
    </style>
</head>

<body>
    <h1>Tablero de Damas</h1>
    <table>
        <!-- Creamos las casillas del tablero -->
        <?php
        for ($fila = 0; $fila < 8; $fila++) {
            echo "<tr>";
            for ($columna = 0; $columna < 8; $columna++) {
                // Determinamos si la casilla debería ser negra o gris
                $clase_casilla = (($fila + $columna) % 2 == 0) ? 'casilla gris' : 'casilla negra';
                // Verificamos si es la fila 4 y aplicamos la clase especial
                if ($fila == 3) {
                    $clase_casilla .= ' verde';
                }
                echo "<td class='$clase_casilla'>";
                // Colocamos las fichas en las casillas iniciales
                if (($fila % 2 == 0 && $columna % 2 != 0) || ($fila % 2 != 0 && $columna % 2 == 0)) {
                    // Colocamos las fichas rojas en las primeras 3 filas
                    if ($fila < 3) {
                        echo "<div class='ficha ficha-roja'></div>";
                    }
                    // Colocamos las fichas azules en las últimas 3 filas
                    elseif ($fila > 4) {
                        echo "<div class='ficha ficha-azul'></div>";
                    }
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
