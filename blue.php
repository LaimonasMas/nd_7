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
    </style>
</head>

<body>
    <a href="?redirect=red" style="color: white">http://localhost/nd/nd_7/blue.php/</a>
    <?php

if ($_GET['redirect'] == 'red') {
    header('Location: http://localhost/nd/nd_7/red.php/');
    exit;
} 
?>
</body>

</html>