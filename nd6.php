<?php

_d($_GET);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $b = '#FFE97F;';
} else {
    $b = 'green';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>

</head>

<body style="background-color: <?php

                                echo $b;

                                ?>">

    <form action="" method="get">
        <button type="submit" name="getas" value="125">GET METODAS</button>
    </form>

    <form action="" method="post" value="">
        <button type="submit">POST METODAS</button>

    </form>

</body>

</html>