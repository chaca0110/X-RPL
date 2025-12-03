<?php

class calculator {
    function penjumlahan(){
        echo"penjumlahan";
    }
    function pengurangan(){
        echo "pengurangan";
    }
    funtion perkalian(){
        echo "perkalian";
    }
    funtion pembagian(){
        echo "pembagian"
    }
}

$kalkulator = new calculator();
$kalkulator->penjumlahan();
$kalkulator->perkalian();
?>