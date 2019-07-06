<?php

function nilaiNama($nama){

    function alphabet_to_number($string) {
        $string = strtoupper($string);
        $length = strlen($string);
        $number = 0;
        $level = 1;
        while ($length >= $level ) {
            $char = $string[$length - $level];
            $c = ord($char) - 64;        
            $number += $c * (26 ** ($level-1));
            $level++;
        }
        return $number;
    }

    $str = strtolower($nama);
    $arr = explode(" ",$str);

    $pecah = str_split($arr[0]);
    $pecah2 = str_split($arr[1]);

    for($a=0;$a<count($pecah);$a++){
        $hasil1[$a]=alphabet_to_number($pecah[$a]);
    }
    for($a=0;$a<count($pecah2);$a++){
        $hasil2[$a]=alphabet_to_number($pecah2[$a]);
    }

    $jumlah1=array_sum($hasil1);
    $jumlah2=array_sum($hasil2)*2;


    return "[".$jumlah1.", ".$jumlah2."]";
}

echo nilaiNama("Christoper Slovanoski");
?>