<?php
session_start();

if (isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['start'])) {
    $_SESSION['nameFirst'] = $_GET['name1'];
    $_SESSION['nameSecond'] = $_GET['name2'];
}

if (isset($_GET['next'])) {
    
    if (!isset($_SESSION['countFirst'])) {
        $_SESSION['countFirst'] = 0;
        $_SESSION['First'] = 1;
    }
    if ($_SESSION['First'] % 2 != 0) {
        $_SESSION['countFirst'] += rand(1, 6);
    }
    $_SESSION['First']++;
    _d($_SESSION['countFirst']);
    _d('dabar meta pirmas');
    _d($_SESSION['First']);
}
if (isset($_GET['next']) && $_SESSION['countFirst'] >= 30) {
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
    header('Location: http://localhost/nd/nd_7/nd11.php');
}

if (isset($_GET['next'])) {
    if (!isset($_SESSION['countSecond'])) {
        $_SESSION['countSecond'] = 2;
        $_SESSION['Second'] = 4;
    }
    if ($_SESSION['Second'] % 2 != 0) {
        $_SESSION['countSecond'] += rand(1, 6);
    }
    $_SESSION['Second']++;
    _d($_SESSION['countSecond']);
    _d('dabar meta antras');
    _d($_SESSION['Second']);
}
if (isset($_GET['next']) && $_SESSION['countSecond'] >= 30) {
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
    unset($_SESSION['First']);
    unset($_SESSION['Second']);
    header('Location: http://localhost/nd/nd_7/nd11.php');
}

function show($first)
{
    if ($first % 2 != 0) {
        return $_SESSION['countFirst'];
    } else {
        return $_SESSION['countSecond'];
    }
}
function show2($first)
{
    if ($first % 2 != 0) {
        return $_SESSION['countSecond'];
    } else {
        return $_SESSION['countFirst'];
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
                <p>Pirmas žaidėjas: <?php (isset($_SESSION['nameFirst'])) ? print_r($_SESSION['nameFirst'])  : ''; ?></p>
                <input type="text" name="name1" id="">
            </div>
            <div>
                <p>Antras žaidėjas: <?php (isset($_SESSION['nameSecond'])) ? print_r($_SESSION['nameSecond']) : ''; ?></p>
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
            <h2><?php (isset($_SESSION['nameFirst'])) ? print_r($_SESSION['nameFirst']) : print_r('') ?> surinko: <?php (isset($_GET['next'])) ? print_r($_SESSION['countFirst']) : print_r(''); ?></h2>
            <h2><?php (isset($_SESSION['nameSecond'])) ? print_r($_SESSION['nameSecond']) : print_r('') ?> surinko: <?php (isset($_GET['next'])) ? print_r($_SESSION['countSecond']) : print_r(''); ?></h2>
            <h3>Dabar meta kauliuką: </h3>
            <form action="http://localhost/nd/nd_7/nd11.php" method="get">
                <button type="submit" name="next" value="<?php if (isset($_SESSION['countFirst']) && isset($_SESSION['countSecond']) && isset($_SESSION['First'])) {
                                                                print_r(show($_SESSION['First']));
                                                            } else {
                                                                echo '';
                                                            }
                                                            ?>">Mesti kauliuką ! ! !</button>
            </form>
        </div>
    </section>

</body>

</html>