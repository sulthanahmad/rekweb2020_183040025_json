<?php

$mahasiswa = [
    [
        "nama" => "Sulthan Ahmad",
        "nrp" => "183040025",
        "email" => "sulthanahmad48@gmail.com"
    ],
    [
        "nama" => "Yoelistio",
        "nrp" => "183040017",
        "email" => "Yoelistio@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
