<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php if (!isset($_POST['post'])) {
                                    echo 'black';
                                } else if (isset($_POST['post'])) {
                                    echo 'white';
                                }
                                ?>;
        }

        .forma {
            display: <?php if (!isset($_POST['post'])) {
                            echo 'inline-block';
                        } else if (isset($_POST['post'])) {
                            echo 'none';
                        }
                        ?>
        }

        .show {
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
    $formTagStart = '<form action="" method="post">';
    $formTagEnd = '</form>';
    $randChecboxNumb = rand(3, 10);
    $checkbox = '<input type="checkbox" name="checkbox[]" id="a" value="1">';
    $button = '<button type="submit" name="post">SUBMIT</button>';
    echo '<div class="forma">';
    echo $formTagStart;
    echo '<br>';
    echo $button;
    echo '<br>';
    foreach (range('A', chr(rand(67, 74))) as $key => $value) {;
        echo "<label style=\"color: red\" for=\"a\">$value</label>" . ' ' . $checkbox;
        echo '<br>';
    }
    echo '<br>';
    echo $formTagEnd;
    echo '</div>';
    echo '<div class="show">';
    if (isset($_POST['checkbox'])) {
        $checked_arr = $_POST['checkbox'];
        $countChecked = count($checked_arr);
        // CountAll blogai skaiciuoja, prideda ir naujos iteracijos checkboxus
        echo "<p style='color: red'>There are $countChecked checkboxe(s).</p>";
    }
    echo '</div>';
    ?>
</body>

</html>