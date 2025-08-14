<?php
    $feriado = false;
    $fimdeSemana = true;
    if ($feriado || $fimdeSemana) {
        echo "Pode descançar.";
    }else{
        echo "Dia útil de trabalho.";
    }
    ?>