<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php if (!isset($_POST['button'])) {
                                    echo 'black';
                                } else if (isset($_POST['button'])) {
                                    echo 'white';
                                }
                                ?>;
        }

        form {
            display: <?php if (!isset($_POST['button'])) {
                            echo 'inline-block';
                        } else if (isset($_POST['button'])) {
                            echo 'none';
                        }
                        ?>
        }

        h3 {
            color: red;
        }
    </style>
</head>

<body>
    <form action="http://localhost/nd/nd_7/nd10.php" method="post">
        <?php
        foreach (range('A', chr(rand(67, 74))) as $key => $value) {                   
            echo "<label style=\"color: red\" for=\"a\">$value</label>" . ' ' . '<input type="checkbox" name="checkbox[]" value="1" id="a">';
            echo '<br>';            
        } 
        $countAll = $key+1;
        echo '<button type="submit" name="button" value=' . $countAll . '>PASPAUSK</button>';
        $number = $_POST['button'];
        ?>
    </form>
    <h3>
    <?php 
    if (isset($_POST['button']) && !isset($_POST['checkbox'])) {
        echo "There are none checkboxes checked out of $number.";
    } else if (isset($_POST['checkbox']) && count($_POST['checkbox']) == 1) {
        echo 'There is ' . count($_POST['checkbox']) . ' checkbox checked ' . "out of $number.";  
    } else if (isset($_POST['checkbox'])) {
        echo 'There are ' . count($_POST['checkbox']) . ' checkboxes checked ' . "out of $number."; 
    }    
    ?>
    </h3>
</body>

</html>