<?php

function tekateki($deret){
    $lampu = [
        "mati","mati","mati","mati","mati","mati","mati","mati","mati","mati","mati","mati","mati","mati","mati"
    ];
    $array = str_split($deret);

    for($a=0;$a<=count($array);$a++){
        if($array[$a] == 1 ){
            for($b=0;$b<15;$b++){
                if($b % 1 == 0){
                    if($lampu[$b]=="mati"){
                        $lampu[$b] = "nyala";
                    }else{
                        $lampu[$b] = "mati";
                    }
                }
            }
        }else if($array[$a] == 2){
            for($b=0;$b<15;$b++){
                if($b % 2 == 0){
                    if($lampu[$b]=="mati"){
                        $lampu[$b] = "nyala";
                    }else{
                        $lampu[$b] = "mati";
                    }
                }
            }
            
        }else if($array[$a] == 3){
            for($b=0;$b<15;$b++){
                if($b % 3 == 0){
                    if($lampu[$b]=="mati"){
                        $lampu[$b] = "nyala";
                    }else{
                        $lampu[$b] = "mati";
                    }
                }
            }
        }
    }

    return print_r($lampu);
}

echo tekateki(1321);

?>