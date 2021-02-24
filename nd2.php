<?php
if (isset($_GET['color'])) {
    $color = $_GET['color']; 
}
else {
    $color = 'black';
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
        body {
            background-color: black;
            background-color: #<?= $color ?>
        }
        a {
            color: white;
        }
    </style>
</head>
<body>
<a href='?color='>Paspausk CIA ir URL juostoj ivesk spalvos koda</a>
</body>
</html>