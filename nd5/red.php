<?php
if (isset($_GET['redirect']) && $_GET['redirect'] == 'blue') {
    header('Location: http://localhost/nd/nd_7/nd5/blue.php/');
    exit;
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
            background-color: red;
        }
    </style>
</head>

<body>
    <a href="?redirect=blue">Paspausk, kad nukreiptų į mėlyną</a>

</body>

</html>