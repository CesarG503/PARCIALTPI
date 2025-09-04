<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container{
            width: 80%;
            margin: 30px auto;
        }
        .input{
            margin: 10px 0px;
        }
    </style>
</head>
<body>

<div class="container">




<form action="" method="post">

    <label for=""><input type="radio" name="tipo" value="F"> fahrenheit -> Celcius</label>
    
    <Label><input type="radio" name="tipo" value="C">Celcius -> fahrenheit</Label>

    <br>

    <label for="temperatura">Temperatura: </label>
    <input type="number" step="0.01" required placeholder="ingresa la temperatura" name="temperatura">

    <br>
    <input type="submit" value="CONVERTIR">
</form>


<h4>
<?php 

if( isset($_POST["temperatura"]))
    {
        $tempratura = 0;
        if($_POST['tipo'] === 'F')
            {
                $tempratura = ($_POST["temperatura"] -32 ) * 1/9;

                echo "La conversion de F -> C: {$tempratura}";

            }
        if($_POST['tipo'] === 'C')
            {

                $tempratura = ($_POST["temperatura"] * 9/5 ) +32 ;

                echo "La conversion de C -> F: {$tempratura}";
                
            }

    }

?>

</h4>

</div>
    
</body>
</html>