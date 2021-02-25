<?php



        _d($_SERVER['REQUEST_METHOD']);
        _d($_POST);
    
    


?>


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
                                    echo 'white';
                                } else if (isset($_POST['post'])) {
                                    echo 'white';
                                }
                                ?>;
        }

        .forma {
            display: <?php if (!isset($_POST['post'])) {
                            echo 'inline-block';
                        } else if (isset($_POST['post'])) {
                            echo 'inline-block';
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
    $randChecboxNumb = rand(3, 10);
    $countAll = 0; 
    echo '<div class="forma">';
    echo '<form action="http://localhost/nd/nd_7/nd10.php" method="post">';
    echo '<br>';
    echo '<br>';
    
    foreach (range('A', chr(rand(67, 74))) as $key => $value) {
        $countAll++;
        echo "<label style='color: red' for='a'>$value</label>" . ' ' . "<input type='checkbox' name='checkbox[]' id='a' value='1'>";
        echo '<br>';        
        echo "<p style='color: red'></p>";
        echo '<br>';
    }
    echo '<button type="submit" name="post" value='.$countAll.'>SUBMIT</button>';
    echo '<br>';
    echo '</form>';
    echo '</div>';
    echo '<div class="show">';
    echo '<br>';
if (isset($_POST['post'])) {
    $rez = $_POST['post'];
}
    if (isset($_POST['checkbox'])) {
        $checked_arr = $_POST['checkbox'];
        $countChecked = count($checked_arr);
        // CountAll blogai skaiciuoja, prideda ir naujos iteracijos checkboxus
        echo "<p style='color: red'>There are $countChecked checkboxe(s) checked out of $rez.</p>";
        
    }
  
    echo '</div>';
    ?>

</body>

</html>