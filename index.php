<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora</title>
</head>

<body>
    <div>
        <div id="calculadora">
            <div class="contenendor-calculador">
                <form class="formulario" action="index.php" method="" name="calc">
                    <h1>CALCULADORA</h1>
                    <label style="width:150px; text-align:center;">Primer valor: </label><br><br>
                    <input class="input" type="text" name="n1" /><br><br>
                    <select name="opciones" style="width:150px; text-align:center; text-decoration:none;"><br><br>
                        <option value="0">+</option>
                        <option value="1">-</option>
                        <option value="2">*</option>
                        <option value="3">/</option>
                    </select><br><br>
                    <label style="width:150px; text-align:center;">Segundo valor: </label><br><br>
                    <input class="input" type="text" name="n2" /><br><br>

                    <input type="submit" value="=" name="calcular" style="width:150px;"><br><br>
                </form>
                <div class="resul">
                    <?php

                    include("validar.php");

                    if (isset($_REQUEST['calcular'])) {

                        $n1 = $_REQUEST['n1'];
                        $n2 = $_REQUEST['n2'];
                        $opciones = $_REQUEST['opciones'];

                        switch ($opciones) {

                            case 0:
                                echo "$n1 + $n2 = " . matematica::sumar($n1, $n2);
                                break;
                            case 1:
                                echo  "$n1 - $n2 = " . matematica::restar($n1, $n2);
                                break;
                            case 2:
                                echo  "$n1 * $n2 = " . matematica::multiplicar($n1, $n2);
                                break;
                            case 3:
                                echo  "$n1 / $n2 = " . matematica::dividir($n1, $n2);
                        }
                    }


                    ?>
                </div>
            </div>
        </div>
    </div>
</body>



</html>