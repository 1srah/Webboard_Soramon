<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 4;
    $b = 10;
    $c = ($b - 5) * $a;

    echo "Result 1 = " .$a."<br>";
    echo 'Result 2 = ' .$b.'<br>';
    echo "Result 3 = $c <br>";
    echo 'Result 4 = $c <br>';
    echo "Result 5 = ".($c + $b)."<br>";
    ?>
</body>
</html>