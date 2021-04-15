<?php
    // Zahrah Al-samach
    // 04/15/21
    // https://github.com/zalsamach/pp2.git
    // Pair Program 2

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 2</title>
</head>
<body>
    <?php
        echo "<p>PHP Array Practice</p>";

        $numbers = array(7, 9, 8, 9, 8, 8, 6);
        function printArr($numbers)
        {
            for ($i = 0; $i < sizeof($numbers); $i++)
            {
                echo $numbers[$i] . '<br>';
            }
        }

        printArr($numbers);
    ?>

</body>
</html>
