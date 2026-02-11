<?php

require "./fonctions/classes/Currency.php";
require "./fonctions/connected.php";
session_start();

if (!connected($_SESSION)) {

    if (empty($_POST)) {

        header("Location: ./login.php");
    } else if ($_POST["userFirstname"] == "" || $_POST["userLastname"] == "" || $_POST["userMdp"] != "cfitech") {

        $_SESSION["checkUser"] = true;

        header("Location: ./login.php");
    } else {


        $_SESSION["connected"] = true;
        $_SESSION["firstname"] = $_POST["userFirstname"];
        $_SESSION["lastname"] = $_POST["userLastname"];
        $_SESSION["currencyCount"] = 0;
    }
}


$title = "Profil";
$nav = "profil";
require "./header.php";
require "./fonctions/lastOperation.php";


?>

<div class="profil">

    <div class="header-profil">

        <div class="gauche">


            <img src="https://images.unsplash.com/photo-1704726135027-9c6f034cfa41?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx1c2VyJTIwcHJvZmlsZSUyMGF2YXRhcnxlbnwxfHx8fDE3NjU5NTE2MDN8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1080" alt="Profile" class="w-full h-full rounded-full object-cover">

            <div class="welcome">

                <h3> Mon Profile </h3>

                <p> Bienvenue <?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"] ?> dans votre page de profile ! </p>


            </div>


        </div>

        <div class="droite">

            <div class="svg-container">


                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-blue-600" aria-hidden="true">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>

            </div>

            <p class="gris"> Connecté </p>

        </div>

    </div>

    <div class="main-profil">

        <div class="title">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calculator text-blue-600" aria-hidden="true">
                <rect width="16" height="20" x="4" y="2" rx="2"></rect>
                <line x1="8" x2="16" y1="6" y2="6"></line>
                <line x1="16" x2="16" y1="14" y2="18"></line>
                <path d="M16 10h.01"></path>
                <path d="M12 10h.01"></path>
                <path d="M8 10h.01"></path>
                <path d="M12 14h.01"></path>
                <path d="M8 14h.01"></path>
                <path d="M12 18h.01"></path>
                <path d="M8 18h.01"></path>
            </svg>

            <h3> Statistiques </h3>

        </div>


        <div class="stat">

            <h1><?php echo $_SESSION["currencyCount"] ?></h1>

            <p> Vous avez effectué <span style="color: blue;"><?php echo $_SESSION["currencyCount"] ?></span> conversion(s) </p>

        </div>



    </div>

    <div class="footer-profil">


        <div class="no-operation" <?php if (isset($_SESSION["currency"])): ?> style="display: none;" <?php endif; ?>>



            <div class="icon">🧮</div>

            <p> Vous n'avez pas encore effectué de conversion. Utilisez l'outil de conversion pour commencer ! </p>

        </div>

        <div class="operation" <?php if (!isset($_SESSION["currency"])): ?> style="display: none;" <?php endif; ?>>

            <div class="last-ope" <?php if (!isset($_SESSION["currency"])): ?> style="display: none;" <?php endif; ?>>

                <h3> Dernières opérations </h3>

                <div class="last-conversion">

                    <?php $lastCurrency = $_SESSION["currency"]["currency" . $_SESSION["currencyCount"]] ?>

                    <p><?php echo $lastCurrency->getMultiplicator() . " " . $lastCurrency->getValue1() . " = " . $lastCurrency->getConversion() . " " . $lastCurrency->getValue2(); ?></p>

                </div>



            </div>

            <div class="history" <?php if (!isset($_SESSION["currency"])): ?> style="display: none;" <?php endif; ?>>

                <h3> Historique complet des conversions </h3>

                <div class="title-history">


                    <div class="bloc-ope">

                        <h4> Montant </h4>
                        <h4> Devise convertie </h4>
                        <h4> Devise cible </h4>


                    </div>

                    <h4 class="ope"> Change </h4>

                </div>


                <?php foreach ($_SESSION["currency"] as $conversion): ?>

                    <div class="history-ope <?php echo $conversion->getMultiplicator(); ?>">

                        <div class="bloc-ope">


                            <p class="nb1"><?php echo strtoupper($conversion->getMultiplicator()); ?></p>
                            <p class="nb2"><?php echo strtoupper($conversion->getValue1()); ?></p>
                            <p class="result"><?php echo $conversion->getValue2(); ?></p>

                        </div>

                        <p class="ope"> <?php echo $conversion->getConversion(); ?></p>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</div>


<?php

require "./footer.php"

?>