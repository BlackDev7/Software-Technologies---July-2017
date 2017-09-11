<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sort Lines</title>
</head>
<body>
<?php
$sortedLines = "";
if(isset($_GET['lines'])){
    $lineArray = explode("\n", $_GET['lines']);
    sort($lineArray);
    $sortedLines = implode("\n", $lineArray);
}

?>
<form>
  <textarea rows="10" name="lines"><?= $sortedLines
      ?></textarea> <br>
    <input type="submit" value="Sort">
</form>

</body>
</html>