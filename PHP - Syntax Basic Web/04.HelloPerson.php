<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Person</title>
</head>
<body>
<?php
if(!isset($_GET['person']))
{?>
<form method="get">
    Name: <input type="text" name="person"/>
    <input type="submit">
</form>
    <?php
}
    if(isset($_GET['person']))
    {
        $name = htmlspecialchars($_GET['person']);
        echo "Hello, $name!";
    }
?>
</body>
</html>