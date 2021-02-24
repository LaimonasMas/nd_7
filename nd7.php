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

if (isset($_POST['post'])) {
    echo 'yellow';
    header('Location: http://localhost/nd/nd_7/nd7.php?get=');
    die;
}
if (isset($_GET['get'])) {
    echo 'green';
}

?>">
    
    <form action="" method="get">
<button type="submit" name="get">GET METODAS</button>
</form>

<form action="" method="post" value="">
<button type="submit" name="post">POST METODAS</button>

</form>

</body>
</html>