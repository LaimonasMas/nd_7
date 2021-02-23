<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: white;
            background-color: #<?php echo $_GET['color']; ?>
        }
        a {
            color: white;
        }
    </style>
</head>
<body>
<form action="" method="get">
Įrašykite spalvos kodą:
<input type="text" name="color" value="">
<input type="submit" value="Išsiųsti">
</form>
<?php


?>

</body>
</html>