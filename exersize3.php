<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\ex2.css">
    <title>Sum in ways</title>
</head>

<body>
    <?php

    $i = 1;
    $whiletotal = 0;
    while ($i < 101) {
        $whiletotal += $i;
        $i++;
    }

    print("While total is: $whiletotal <br>");

    $fortotal=0;
    for ($j = 0; $j <= 100; $j++) {
        $fortotal += $j;
    }

    print("For total is: $fortotal<br>");


    $dototal=0;
    $k = 0;
    do{
        $dototal += $k;
        $k++;
    }while($k<101);

    print("Do-while total is: $dototal<br>")
    ?>
</body>

</html>