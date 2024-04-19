$ozy = [
    "nama" => "noven",
    "pekerjaan" => "programer",
    "pendidikan" => "S1",
    "umur" => 9,
    "nilai" => "C",
    "hobi" => [
        "tidur", "duduk", "rebahan"
    ]
    ];

<?php

require "array.php";

    foreach ($ozy as $key => $value) {
        if ($key == "hobi") {
            echo "hobi:" . PHP_EOL;
            $a = 1;
            foreach ($value as $hobi) {
                echo $a . ". " . $hobi . PHP_EOL;
                $a++;
            }
        } else {
            echo $key . ':' . $value . PHP_EOL;
        }
    }
