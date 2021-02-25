<?php
session_start();

if (isset($_GET['name1']) && isset($_GET['name1']) && isset($_GET['start'])) {
    $firstPlayer = $_GET['name1'];
    $secondPlayer = $_GET['name2'];
}

if (isset($_GET['next'])) {
    if (!isset($_SESSION['countFirst'])) {
        $_SESSION['countFirst'] = 0;
        $_SESSION['First'] = 1;
    }
        $_SESSION['countFirst'] += rand(1, 6);
        $_SESSION['First']++;
        _d($_SESSION['countFirst']);    
    _d('dabar meta pirmas');
    _d($_GET);
} 
if (isset($_GET['next']) && $_SESSION['countFirst'] >= 30) {
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
    header('Location: http://localhost/nd/nd_7/nd11.php');
}

if (isset($_GET['next'])) {
    if (!isset($_SESSION['countSecond'])) {
        $_SESSION['countSecond'] = 0;
        $_SESSION['Second'] = 2;
    }
        $_SESSION['countSecond'] += rand(1, 6);
        $_SESSION['Second']++;
        _d($_SESSION['countSecond']);    
    _d('dabar meta antras');
    _d($_GET);
} 
if (isset($_GET['next']) && $_SESSION['countSecond'] >= 30) {
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
    header('Location: http://localhost/nd/nd_7/nd11.php');
}

function show($first) {
    if ($first % 2 != 0) {
        return print_r($_SESSION['countFirst']);
    } else {
        return print_r($_SESSION['countSecond']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesk kaulą</title>
    <style>
        .leftColumn {
            display: inline-block;
        }

        .rightColumn {
            display: inline-block;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <section class="leftColumn">
        <div>
            <h2>Kauliukų žaidimas</h2>
        </div>
        <form action="http://localhost/nd/nd_7/nd11.php" method="get">
            <div>
                <p>Pirmas žaidėjas: <?php (isset($firstPlayer)) ? print_r($firstPlayer)  : ''; ?></p>
                <input type="text" name="name1" id="">
            </div>
            <div>
                <p>Antras žaidėjas: <?php (isset($secondPlayer)) ? print_r($secondPlayer) : ''; ?></p>
                <input type="text" name="name2" id="">
            </div>
            <br>
            <div>
                <button type="submit" name="start">Pradėti ! ! !</button>
            </div>
        </form>
    </section>
    <section class="rightColumn">
        <div>
            <h2>Rezultatas: </h2>
            <h2><?php (isset($_GET['name1'])) ? print_r($_GET['name1']) : print_r('') ?> taškai: <?php (isset($_GET['next'])) ? print_r($_GET['next']) : print_r(''); ?></h2>
            <h2><?php (isset($_GET['name2'])) ? print_r($_GET['name2']) : print_r('') ?> taškai: <?php (isset($_GET['next'])) ? print_r($_GET['next']) : print_r(''); ?></h2>
            <h3>Dabar meta kauliuką: </h3>
            <form action="http://localhost/nd/nd_7/nd11.php" method="get">
                <button type="submit" name="next" value="<?php if (isset($_SESSION['countFirst']) && isset($_SESSION['countSecond'])) {
                    show($_SESSION['First']);
                } else {
                    echo '';
                }
                ?>">Mesti kauliuką ! ! !</button>
            </form>
        </div>
    </section>

</body>

</html>