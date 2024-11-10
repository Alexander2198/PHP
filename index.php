<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicación de Dos Números</title>
</head>
<body>
    <h1>Multiplication two numbers</h1>
    
    <form method="post">
        <label for="numero1">Number 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        
        <label for="numero2">Number 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        
        <button type="submit">Multiply</button>
    </form>

    <?php
        // Verificar si el formulario fue enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los números ingresados por el usuario
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            
            // Calcular el resultado de la multiplicación
            $resultado = $numero1 * $numero2;

            // Mostrar el resultado
            echo "<h2>Result:</h2>";
            echo "<p>The result  $numero1 x $numero2 is: $resultado</p>";
        }
    ?>
</body>
</html>


