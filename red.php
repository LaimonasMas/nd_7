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

        <?php
        if ($_GET['redirect'] == 'blue') {
            header('Location: http://localhost/nd/nd_7/blue.php/');
            exit;
        }
        ?>
    </style>
</head>

<body>
    <a href="?redirect=blue">http://localhost/nd/nd_7/red.php/</a>

</body>

</html>