<?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
    echo $ar_buah[1];
    echo "<br/>Jumlah Buah " . count($ar_buah);
    echo "<ol>";
    foreach ($ar_buah as $buah){
        echo "<li>". $buah . "</li>";
    } echo "</ol>";


    $ar_buah[] = "Durian";

    unset($ar_buah[1]);

    $ar_buah[2] = "Manggis";

    echo "<ul>";
    foreach ($ar_buah as $buah => $v){
        echo "<li>Buah index - ". $buah ." adalah ". $v . "</li>";
    }
    echo "</ul>";

    echo "<ul>";
    sort ($ar_buah);
    foreach ($ar_buah as $buah => $v){
        echo "<li>Buah index - ". $buah ." adalah ". $v . "</li>";
    }
    echo "</ul>";
?>