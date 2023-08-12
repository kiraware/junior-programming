<?php
    $mahasiswa = array(
        "a" => 3.6,
        "b" => 3.7,
        "c" => 2.8,
        "d" => 2.8,
        "e" => 3.0,
        "f" => "lulus",
        "g" => -1,
        "h" => 4.2,
    );

    foreach ($mahasiswa as $name => $value) {
        if (gettype($value) == "double" && ($value >= 0 && $value <= 4)) {
            if ($value > 3.5) {
                echo 'high';
            } else if ($value > 3.0) {
                echo 'medium';
            } else {
                echo 'low';
            }
            echo '<br>';
        } else {
            echo 'Error';
            echo '<br>';
        }
    }
?>