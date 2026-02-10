<?php

require "./fonctions/classes/Currency.php";
session_start();
$title = "Conversion";
$nav = "euroDirham";
require "./header.php";
require "./fonctions/functionsCurrency.php";


if (!connected($_SESSION)) {

    header("Location: ./login.php");
}


if (!empty($_POST["value1"]) && !empty($_POST["value2"] && !empty($_POST["multiplicator"]))) {

 
    $tabConversion = getApi($_POST["value1"],$_POST["value2"],$_POST["multiplicator"]);
    $conversion = $tabConversion["conversion"];
    $date = $tabConversion["date"];
    $date = new DateTime($date);
    $date = $date->format("D d F Y");

    $currency = new Currency($_POST["value1"],$_POST["value2"],$_POST["multiplicator"],$conversion,$date);

    $_SESSION["currencyCount"]++;
    $count = $_SESSION["currencyCount"];

    $_SESSION["currency"]["currency".$count] = $currency;

    



}



?>

<div class="conversion">

    <h3>Conversion</h3>


    <form id="formConvert" action="" method="post">


        <div class="switch">

            <input type="hidden" id="value1" name="value1" value="eur">
            <h1 class="devise" data-devise="eur"> Euros </h1>



            <input type="hidden" id="value2" name="value2" value="mad">
            <h1 class="devise" data-devise="mad">Dirham</h1>

        </div>

        <div class="input">

            <input type="number" name="multiplicator" placeholder="Veuillez introduire le montant a convertir" required>

        </div>

        <button type="submit" id="buttonSwitch">


            <div class="svg-container green">


                <svg width="21px" height="21px" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(4 2)">
                        <path d="m4.5 8.5-4 4 4 4" />
                        <path d="m12.5 12.5h-12" />
                        <path d="m8.5.5 4 4-4 4" />
                        <path d="m12.5 4.5h-12" />
                    </g>
                </svg>

            </div>

        </button>

        <button type="submit" class="blue"> Convertir </button>


    </form>

    <div id="result">

       <?php
       
       if (isset($conversion) && isset($date)){

        echo strtoupper($currency->getValue1())." => ".strtoupper($currency->getValue2())."<br>";
        echo $conversion."<br>";
        echo "Mis a jour: ".$date;

       }

       ?>

    </div>

    <h3 class="background"> 💡 Ce formulaire vous permet de convertir des euros en Dirhams et inversement </h3>

</div>

<?php

require "./footer.php"

?>