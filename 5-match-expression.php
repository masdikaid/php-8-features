<?php

$value = A;
$result = "";

switch ($value) {
    case 'A':
        $result = "LULUS";
        break;
    
    default:
        $result = "TIDAK LULUS";
        break;
}


// in match
$result = match ($value){
    "A" => "LULUS",
    "B", "C" => "LULUS DENGAN CATATAN",

    default => "itu nilai ?"
};


$value = 30;
$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

$value = "DIKA";
$result = match (true) {
    str_contains($value, "DIKA") => "HALO DIKA",
    str_contains($value, "ADI") => "HALO ADI",
    str_contains($value, "BAMBANG") => "HALO BAMBANG",
    str_contains($value, "JOKO") => "HALO JOKO",
    default => "HALO ANDA SIAPA YA"
};