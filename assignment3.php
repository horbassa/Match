<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Enter a string to transform to uppercase</h2>
<form method="POST">
  String: <br>
  <input type="text" name="text" required><br>
  <input type="submit" name="submit" value="Transform to uppercase"><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])) {
    $text = $_POST['text'];

    $upperCaseText = strtoupper($text);

    echo "<h2>The transformed string is: </h2>";
    echo $upperCaseText;
}
?>