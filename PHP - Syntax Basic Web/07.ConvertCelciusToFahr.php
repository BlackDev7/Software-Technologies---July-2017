<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celcius <=> Fahrenhait</title>
</head>
<body>
<?php
$msgAfterCelsius = "";
?>
<?php

if(isset($_GET['cel']))
{
    $cel = $_GET['cel'];
    $fahr = (($cel * 9) / 5) + 32;
    $msgAfterCelsius = "$cel &deg;C = $fahr &deg;F";
}
else if(isset($_GET['fah'])){
    $fahr = $_GET['fah'];
    $cel = (($fahr - 32) * 5) / 9;

    $msgAfterCelsius = "$fahr &deg;F = $cel &deg;C";

}
?>
<form>
    Celsius: <input type="text" name="cel" />
    <input type="submit" value="Convert">
    <?= $msgAfterCelsius ?>
</form>
<form>
    Fahrenheit: <input type="text" name="fah" />
    <input type="submit" value="Convert">
</form>
</body>
</html>