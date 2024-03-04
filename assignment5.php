<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$alpha = array_fill(0, 50, 0.0);

for($i = 0; $i < 25; $i++){
    $alpha[$i] = $i * $i;
}

for($i = 25; $i < 50; $i++){
    $alpha[$i] = 3 * $i;
}

$counter = 0;
foreach($alpha as $value){
    echo $value . "\t";
    $counter++;
    if($counter % 10 == 0){
        echo "<br />";
    }
}
?>
</body>
</html>