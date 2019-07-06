<?php

function biodata(){
    $biodata = [
        name => "Rahmad Subagiyo",
        age => 22,
        address => "Puhnunggal Rt 2 Rw 5 Desa Gambiranom, Kecamatan Kismatoro, Kabupaten Wonogiri, Jawa Tengah",
        hobbies => [
            "Ngoding","Ngwifi"
        ],
        is_married => false,
        list_school => [
            name => "Politeknik Negeri Madiun",
            year_in => "2016",
            year_out => "2019",
            major => "Komputerisasi Akuntansi"
        ],
        skills => [
            skill_name => "PHP",
            level => "Beginner"
        ],
        interest_in_coding => true
    ];

    return json_encode($biodata,JSON_PRETTY_PRINT);
}

    echo biodata();
?>