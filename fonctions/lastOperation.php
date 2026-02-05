<?php

function lastOperation($ope): array
{

    $tab = [];

    foreach ($_SESSION["operation"] as $operation) {

        if ($operation["type"] == "$ope") {

            $tab = [

                "nb1" => $operation["nb1"],
                "nb2" => $operation["nb2"],
                "resultat" => $operation["resultat"],

            ];
        }
    }

    return $tab;
}

