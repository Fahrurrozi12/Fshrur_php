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

<?php

    // foreach ($ozy as $k => $value) {
    //     if ($k == 'nilai' && $ozy['nilai'] 'A') {
    //         continue;
    //     }
    //     if ($k == 'nilai' && $ozy['nilai'] 'D ') {
    //         continue;
    //     }
    // }

    foreach ($ozy['nilai'] as $k => $v) {
        $s = "semester " . ($k + 1);
        echo "nilai {$s} : {$v} \n";
    
        switch ($v) {
            case 'A':
                echo "Predikat {$s} : Sangat Baik \n";
                break;
            case 'B':
                echo "Predikat {$s} : Baik \n";
                break;
            case 'C':
                echo "Predikat {$s} : Cukup \n";
                break;
            case 'D':
                echo "Predikat {$s} : Kurang \n";
                break;
            default:
                echo "Predikat {$s} : - \n";
                break;
        }
    }
