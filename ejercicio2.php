<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

    <label for=""><input type="radio" name="tipo" value="F"> fahrenheit</label>
    
    <Label><input type="radio" name="tipo" value="C">Celcius</Label>

    <br>

    <label for="temperatura">Temperatura: </label>
    <input type="number" step="0.01" required placeholder="ingresa la temperatura" name="temperatura">

    <br>
    <input type="submit" value="CONVERTIR">
</form>

<?php ?>
    
</body>
</html>