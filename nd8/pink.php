<?php

if (isset($_POST['post'])) {
    header('Location: http://localhost/nd/nd_7/nd8/rose.php?noredirecting=1');
die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: pink">
    <form action="" method="post" value="">
        <button type="submit" name="post">GO TO ROSE</button>
    </form>
</body>

</html>