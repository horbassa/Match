<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Enter Three Numbers</h2>
<form method="POST">
  Number 1: <br>
  <input type="number" name="num1" required><br>
  Number 2: <br>
  <input type="number" name="num2" required><br>
  Number 3: <br>
  <input type="number" name="num3" required><br>
  <input type="submit" name="submit" value="Order the numbers"><br>
</form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $numbers = array($num1, $num2, $num3);

    sort($numbers);

    echo "<h2>The Numbers in Ascending Order are: </h2>";
    foreach ($numbers as $number) {
        echo $number."<br>";
    }
}
?>