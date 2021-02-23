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
            background-color: #<?php echo $_GET['color']; ?>
        }
        a {
            color: white;
        }
    </style>
</head>
<body>

<?php
echo "<div><a href='?color='>http://localhost/nd/nd_7/nd2.php</a></div>";
?>

</body>
</html>