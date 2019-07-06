<?php 

function hitung($tanggal,$uang){
    $mie = 4000;

    $jml_beli = ($uang - ($uang % $mie)) / $mie;

    if($tanggal % 2 == 0){
        $bonus = ($jml_beli - ($jml_beli % 4)) / 4;
        $total = $jml_beli + $bonus;
        if($tanggal % 5 == 0){
            $total_mie = $total  * 10;
        }
    }else{
        $bonus = ($jml_beli - ($jml_beli % 3)) / 3;
        $total = $jml_beli + $bonus;
        if($tanggal % 5 == 0){
            $total_mie = $total  * 5;
        }
    }
    return $total_mie;
}

echo hitung(25,50000);

?>