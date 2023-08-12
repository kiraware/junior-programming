<?php
    $mahasiswa = array(
        "a" => 3.6,
        "b" => 3.7,
        "c" => 2.8,
        "d" => 2.8,
        "e" => 3.0,
    );

    foreach ($mahasiswa as $name => $value) {
        if ($value > 3.5) {
            echo 'high';
        } else if ($value > 3.0) {
            echo 'medium';
        } else {
            echo 'low';
        }
        echo '<br>';
    }
?>