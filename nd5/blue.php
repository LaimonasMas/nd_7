<?php
if (isset($_GET['redirect']) && $_GET['redirect'] == 'red') {
    header('Location: http://localhost/nd/nd_7/nd5/red.php/');
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
            background-color: blue;
        }

        a {
            color: white;
        }
    </style>
</head>

<body>
    <a href="?redirect=red">Paspausk, kad nukreiptų į raudoną</a>
</body>

</html>