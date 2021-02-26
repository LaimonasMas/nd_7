<?php
session_start();

// užsisaugom vardus
if (isset($_GET['name1']) && isset($_GET['name2']) && isset($_GET['start'])) {
    $_SESSION['nameFirst'] = $_GET['name1'];
    $_SESSION['nameSecond'] = $_GET['name2'];
}

// užsisaugom bendrą skaitiklį, kuris bus naudojamas nustatant kurio žaidėjo informaciją atvaizduoti
if (!isset($_SESSION['mainCount'])) {
    $_SESSION['mainCount'] = 0;
}

if (isset($_SESSION['mainCount']) && isset($_GET['next'])) {
    _d($_SESSION['mainCount']);
    $_SESSION['mainCount']++;
    _d($_SESSION['mainCount']);
}

// atvaizdavimo funkcija
function show($number)
{
    if ($number == 0) {
        return 1;
    } else if ($number % 2 != 0) {
        return 2;
    } else if ($number % 2 == 0) {
        return 3;
    }
}

if (empty($_GET['name1']) && empty($_GET['name2']) && empty($_SESSION['nameFirst']) && empty($_SESSION['nameSecond'])) {
    $_SESSION['mainCount'] = 0;
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
}

// kauliuku meta pirmas zaidejas
if (!isset($_SESSION['countFirst'])) {
    $_SESSION['countFirst'] = 0;
}
if (isset($_SESSION['mainCount']) && (show($_SESSION['mainCount']) == 2)) {
    _d($_SESSION['mainCount']);
    $number1 = rand(1, 6);
    $_SESSION['countFirst'] += $number1;
}

// kauliuku meta antras zaidejas
if (!isset($_SESSION['countSecond'])) {
    $_SESSION['countSecond'] = 0;
}
if (isset($_SESSION['mainCount']) && (show($_SESSION['mainCount']) == 3)) {
    $number2 = rand(1, 6);
    $_SESSION['countSecond'] += $number2;
}

// nugaletojo skaiciavimas 
function winner($countFirst, $countSecond)
{
    if ($countFirst > $countSecond) {
        return '<h2>Nugalėjo ' . $_SESSION['nameFirst'] . ' surinkęs </h2>';
    }
    if ($countFirst < $countSecond) {
        return '<h2>Nugalėjo ' . $_SESSION['nameSecond'] . ' surinkęs </h2>';
    }
}

// bendras skaitikliu nuresetinimas
$winnerCounter = 0;
if (isset($_SESSION['mainCount']) && ($_SESSION['countFirst'] >= 30 || $_SESSION['countSecond'] >= 30)) {
    $_SESSION['countFirstAfter'] = $_SESSION['countFirst'];
    $_SESSION['countSecondAfter'] = $_SESSION['countSecond'];
    $winnerCounter++;
    $_SESSION['mainCount'] = 0;
    $_SESSION['countFirst'] = 0;
    $_SESSION['countSecond'] = 0;
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
        <form action="" method="get">
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

            <?php

            if (isset($_SESSION['nameFirst']) && !empty($_SESSION['nameFirst']) && isset($_SESSION['nameSecond']) && !empty($_SESSION['nameSecond']) && ($_SESSION['countFirst'] > 0 || $_SESSION['countSecond'] > 0)) {
                echo '<h2>Rezultatas: </h2>';

                if (show($_SESSION['mainCount']) == 2 && isset($_SESSION['nameFirst']) && $_SESSION['mainCount'] != 0 && $winnerCounter != 1 && $_SESSION['countFirst'] > 0) {
                    print_r('<h4>' . $_SESSION['nameFirst'] . " išmetė " . $number1 . '</h4>');
                }
                if (show($_SESSION['mainCount']) == 3 && isset($_SESSION['nameSecond'])  && $_SESSION['mainCount'] != 0 && $winnerCounter != 1 && $_SESSION['countSecond'] > 0) {
                    print_r('<h4>' . $_SESSION['nameSecond'] . " išmetė " . $number2 . '</h4>');
                }
            }
            ?>
            <h3><?php
                if ($winnerCounter != 1 && $_SESSION['countFirst'] > 0) {
                    (isset($_SESSION['nameFirst']) && !empty($_SESSION['nameFirst'])) ? print_r($_SESSION['nameFirst'] . ' surinko: ' . $_SESSION['countFirst'])  : '';
                }
                ?></h3>
            <h3><?php
                if ($winnerCounter != 1 && $_SESSION['countSecond'] > 0) {
                    (isset($_SESSION['nameSecond']) && !empty($_SESSION['nameSecond'])) ? print_r($_SESSION['nameSecond'] . ' surinko: ' . $_SESSION['countSecond']) : '';
                }
                if (isset($_SESSION['nameFirst']) && !empty($_SESSION['nameFirst']) && isset($_SESSION['nameSecond']) && !empty($_SESSION['nameSecond']) && $winnerCounter != 1) {
                    // echo '<br>';
                    echo '<h2>Dabar mes kauliuką: </h2>';
                }
                ?>
            </h3>
            <h2>
                <?php
                if (($_SESSION['countFirst'] < 30 || $_SESSION['countSecond'] < 30) && ($winnerCounter != 1)) {
                    if (show($_SESSION['mainCount']) == 1 && isset($_SESSION['nameFirst'])) {
                        print_r('<h2>' . $_SESSION['nameFirst'] . '</h2>');
                    }
                    if (show($_SESSION['mainCount']) == 2 && isset($_SESSION['nameFirst']) && $_SESSION['mainCount'] != 0) {
                        print_r('<h2>' . $_SESSION['nameSecond'] . '</h2>');
                    }
                    if (show($_SESSION['mainCount']) == 3 && isset($_SESSION['nameSecond'])  && $_SESSION['mainCount'] != 0) {
                        print_r('<h2>' . $_SESSION['nameFirst'] . '</h2>');
                    }
                }
                if ($winnerCounter == 1) {
                    echo '<h2>' . winner($_SESSION['countFirstAfter'], $_SESSION['countSecondAfter']) . '</h2>' . '<h2>' . max($_SESSION['countFirstAfter'], $_SESSION['countSecondAfter']) . '</h2>';
                }
                ?>
            </h2>
            <?php
            if (isset($_SESSION['nameFirst']) && !empty($_SESSION['nameFirst']) && isset($_SESSION['nameSecond']) && !empty($_SESSION['nameSecond']) && $winnerCounter != 1) {
                echo '<form action="http://localhost/nd/nd_7/nd11A.php" method="get">';
                echo '<button type="submit" name="next" value="1">Mesti kauliuką ! ! !</button>';
                echo '</form>';
            }
            ?>
        </div>
    </section>

</body>

</html>