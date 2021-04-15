<?php
    function printArr($numbers)
    {
        for ($i = 0; $i < sizeof($numbers); $i++)
        {
            echo $numbers[$i] . '<br>';
        }

    }

    function largest($numbers)
    {
        echo "<p>Largest Number: </p>" . (max($numbers));
    }

    ?>
