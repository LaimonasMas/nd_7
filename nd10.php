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

<body >

    <?php
    $formTagStart = '<form action="" method="post">';
    $formTagEnd = '</form>';
    ?>

    <?php
    $randChecboxNumb = rand(3, 10);
    $checkbox = '<input type="checkbox" name="checkbox[]" id="a" value="1">';
    $button = '<button type="submit" name="post">SUBMIT</button>';
    $countAll = 0;
    echo '<div class="forma">';
    echo $formTagStart;
    echo '<br>';
    echo $button;
    echo '<br>';
    foreach (range('A', chr(rand(67, 74))) as $key => $value) {
        echo "<label style=\"color: red\" for=\"a\">$value</label>" . ' ' . $checkbox;
        echo '<br>';
        $countAll++;
        echo "<p style='color: red'>$countAll</p>";
        echo '<br>'; 
    }
    echo '<br>';
    echo $formTagEnd;
    echo '</div>';
    echo '<div class="show">';
    $checked_arr = $_POST['checkbox'];
    $countChecked = count($checked_arr);
    echo "There are $countChecked checkboxe(s) checked out of $countAll.";
    echo '</div>';

    ?>

</body>

</html>