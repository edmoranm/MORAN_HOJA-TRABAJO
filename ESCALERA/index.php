<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dibujar Escalera</title>
    <style>
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: gray;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 10px 10px 10px red;
        }

        label {
            display: block;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 2px solid red;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: red;
        }

        body {
            font-family: Impact, 'Arial Narrow Bold', sans-serif;
            background-color: black;
            text-shadow: 5px 2px 2px red;
            padding: 20px;
            background-image: url(fondo.jpg);
            background-size: cover;
        }
    </style>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="pisos">Número de pisos (5-8):</label>
        <input type="number" id="pisos" name="pisos" min="5" max="8" required>
        <input type="submit" value="Dibujar Escalera">
    </form>
</body>

</html>