<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


for ($i = 1; $i < 101; $i ++) {

    // Remainder 
    $m3 = $i % 3;
    $m5 = $i % 5;

    //  checks if the remainer is 0
    // if so then it must be a multiple of 3 or 5.
    if ($m3 === 0) {
        echo "Fizz";
    }

    if ($m5 === 0) {

        echo "Buzz";
    }
    if ($m3 && $m5 != 0) {
        echo $i;
    }
    echo "</br>";
}

?>