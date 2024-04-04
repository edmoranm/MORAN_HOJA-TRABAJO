<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATRIZ</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 10%;
            padding: 10px;
            background-image: url(fondo.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(128, 128, 128, 0.9);
            border-radius: 8px;
            border: solid black;
            box-shadow: 10px 10px 10px rgba(255, 0, 0, 0.5);
           
        }

        h1 {
            text-align: center;
            color: blue;
        }

        form {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: red;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid black;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: solid black;
            background-color: black;
            color: blue;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .table-container {
            text-align: center;
            margin-top: 20px;
        }

        table {
            display: inline-block;
            border: solid black;
        }

        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>MATRIZ</h1>

    <?php
    function sumarColumna($matriz, $columna) {
        $suma = 0;
        foreach ($matriz as $fila) {
            $suma += $fila[$columna];
        }
        return $suma;
    }

    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número de filas y columnas del formulario
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        $columna_a_sumar = $_POST['columna'];

        // Crear la matriz con los números de casilla
        $matriz = [];
        for ($i = 0; $i < $filas; $i++) {
            $fila = [];
            for ($j = 0; $j < $columnas; $j++) {
                // Calcular el número de casilla
                $numero_casilla = $i * $columnas + $j + 1;
                // Agregar el número de casilla a la fila
                $fila[] = $numero_casilla;
            }
            // Agregar la fila a la matriz
            $matriz[] = $fila;
        }

        // Mostrar la tabla con los números de casilla
        echo "<div class='table-container'>";
        echo "<table>";
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                echo "<td>{$matriz[$i][$j]}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";

        // Calcular y mostrar la suma de la columna seleccionada por el usuario
        echo "<h2>Suma de la columna seleccionada</h2>";
        $suma_columna = sumarColumna($matriz, $columna_a_sumar);
        echo "<p>La suma de la columna $columna_a_sumar es: $suma_columna</p>";
    } else {
        // Si no se han enviado datos del formulario, mostrar el formulario para que el usuario ingrese los datos
        ?>
        <form method="post">
            <label for="filas">NUMERO DE FILAS:</label>
            <input type="number" id="filas" name="filas" min="1" required><br>
            <label for="columnas">NUMERO DE COLUMNAS</label>
            <input type="number" id="columnas" name="columnas" min="1" required><br>
            <label for="columna">COLUMNAS A SUMAR</label>
            <input type="number" id="columna" name="columna" min="0" required><br>
            <input type="submit" value="Generar Matriz">
        </form>
        <?php
    }
    ?>
</div>

</body>
</html>
