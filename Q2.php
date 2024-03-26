<?php
    $x[0][0] = 1;
    $x[0][1] = 2;
    $x[1][0] = 3;
    $x[1][1] = 4;

    foreach($x as $v){
        foreach($v as $z){
            echo $z."<br>";
        }
    }
    