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
            background-color: <?php if ($_GET['color'] == 1) {
    echo 'red';
} ?>;
        }
        a {
            color: white;
            color: <?php if ($_GET['color'] == 1) {
    echo 'black';
} ?>;
        }
    </style>
</head>
<body>

<?php
echo "<div><a href='index.php'>http://localhost/nd/nd_7/index.php</a></div>";
echo '<br>';
echo "<div><a href='?color=1'>http://localhost/nd/nd_7/index.php</a></div>";
?>

</body>
</html>

