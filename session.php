<?php

session_start();
$title = "DEBUG";
$nav = "debug";
require "./header.php";

?>



<div class="session">

    <h3>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bug text-yellow-600" aria-hidden="true">
            <path d="M12 20v-9"></path>
            <path d="M14 7a4 4 0 0 1 4 4v3a6 6 0 0 1-12 0v-3a4 4 0 0 1 4-4z"></path>
            <path d="M14.12 3.88 16 2"></path>
            <path d="M21 21a4 4 0 0 0-3.81-4"></path>
            <path d="M21 5a4 4 0 0 1-3.55 3.97"></path>
            <path d="M22 13h-4"></path>
            <path d="M3 21a4 4 0 0 1 3.81-4"></path>
            <path d="M3 5a4 4 0 0 0 3.55 3.97"></path>
            <path d="M6 13H2"></path>
            <path d="m8 2 1.88 1.88"></path>
            <path d="M9 7.13V6a3 3 0 1 1 6 0v1.13"></path>
        </svg>

        Debug - Session Actuelle

    </h3>


    <span class="indication"> ⚠️ Cette page affiche toutes les données de session en mode debug </span>


    <h4> État de la session </h4>

    <div class="var-session">

        <?php

        foreach ($_SESSION as $key => $element) {

            if ($key == "operation") {

                echo "operation:<br>";

                foreach ($element as $ope) {

                    foreach ($ope as $cle => $value) {

                        if ($cle == "type") {

                            echo "{<br>";
                            echo $cle . " : " . $value . "<br>";
                        } else {

                            echo $cle . " : " . $value . "<br>";
                        }
                    }

                    echo "}<br>";
                }
            } else {

                echo $key . " : " . $element . "<br>";
            }
        }

        ?>

    </div>

    <div class="info">

        <div class="card-info card1">

            <h5> Statut de connexion </h5>

            <?php if (!isset($_SESSION["connected"]) || !$_SESSION["connected"]): ?>


                <h2> ✗ Non connecté </h2>

            <?php else: ?>

                <h2 style="color: rgb(4, 255, 4);"> ✓ Connecté </h2>

            <?php endif; ?>

        </div>

        <div class="card-info card2">

            <h5> Prénom </h5>

            <?php if (isset($_SESSION["name"])): ?>

                <h2> <?php echo $_SESSION["name"]; ?> </h2>

            <?php else: ?>

                <h2> N/A </h2>

            <?php endif; ?>

        </div>

        <div class="card-info card3">

            <h5> Opérations en session </h5>
            <h2><?php if (isset($_SESSION["operationCount"])): echo $_SESSION["operationCount"];
                else: ?>0<?php endif; ?></h2>

        </div>

        <div class="card-info card4">


            <h5> Total opérations (persisté) </h5>
            <h2><?php if(isset($_SESSION["totalOperation"])): echo $_SESSION["totalOperation"]; else: echo "0"; endif; ?></h2>

        </div>

    </div>

    <?php

    if (isset($_SESSION["operation"])):

    ?>

        <h4> Opérations en mémoire </h4>

        <?php

        foreach ($_SESSION["operation"] as $key => $operation): ?>


            <div class="operation">

                <span class="number"><?php echo $key + 1; ?></span>
                <p><?php echo $operation["type"]; ?></p>

                <?php if ($operation["type"] == "addition"): ?>

                    <p class="ope"><?php echo $operation["nb1"] . " + " . $operation["nb2"] . " = " . $operation["resultat"]; ?></p>

                <?php elseif ($operation["type"] == "soustraction"): ?>

                    <p class="ope"><?php echo $operation["nb1"] . " - " . $operation["nb2"] . " = " . $operation["resultat"]; ?></p>

                <?php elseif ($operation["type"] == "multiplication"): ?>

                    <p class="ope"><?php echo $operation["nb1"] . " x " . $operation["nb2"] . " = " . $operation["resultat"]; ?></p>

                <?php else: ?>

                    <p class="ope"><?php echo $operation["nb1"] . " / " . $operation["nb2"] . " = " . $operation["resultat"]; ?></p>

                <?php endif; ?>

            </div>

    <?php endforeach;
    endif; ?>

</div>

<?php

require "./footer.php"

?>