<?php
    function parOUimpar($num) {
        if ($num % 2 == 0) {
            echo "$num é par.<br>";
        } else {
            echo "$num é ímpar.<br>";
        }
    }
    $num = $_POST['num'];
    parOUimpar($num);
    ?>