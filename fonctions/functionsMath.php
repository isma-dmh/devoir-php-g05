<?php

function addition(string $nb1, string $nb2): array
{

    $tab = [

        "type" => "addition",
        "nb1" => $nb1,
        "nb2" => $nb2,
        "resultat" => (float)$nb1 + (float)$nb2,

    ];


    return $tab;
}


function soustraction(string $nb1, string $nb2): array
{

    $tab = [

        "type" => "soustraction",
        "nb1" => $nb1,
        "nb2" => $nb2,
        "resultat" => (float)$nb1 - (float)$nb2,

    ];


    return $tab;
}



function multiplication(string $nb1, string $nb2): array
{

    $tab = [

        "type" => "multiplication",
        "nb1" => $nb1,
        "nb2" => $nb2,
        "resultat" => (float)$nb1 * (float)$nb2,

    ];


    return $tab;
}


function division(string $nb1, string $nb2): array
{

    $tab = [

        "type" => "division",
        "nb1" => $nb1,
        "nb2" => $nb2,
        "resultat" => (float)$nb1 / (float)$nb2,

    ];


    return $tab;
}
