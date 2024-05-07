

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de notas</title>
</head>

<body>
    <form action="logica.php" method="post">
        <label for="nota">
            <h4>Ingrese su nota</h4>
        </label>
        <input type="number" name="nota" min="1" max="10" step="0.01" required><br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>
</body>
</html>
<?php
require_once 'logica.php';
require_once 'Grades.php';

if (isset($_POST['submit'])) {
    $nota = new Grades($_POST['nota']);
   echo calcularGrado($nota->getGrade());
}



