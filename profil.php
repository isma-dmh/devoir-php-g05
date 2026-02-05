<?php

session_start();

if (!isset($_SESSION["connected"]) || !$_SESSION["connected"]) {

    if (empty($_POST)) {

        header("Location: ./login.php");
    } else if ($_POST["user"] == "" && $_POST["mdp"] != "cfitech") {

        $_SESSION["checkName"] = true;
        $_SESSION["checkMdp"] = true;
        header("Location: ./login.php");
        
    } else if ($_POST["user"] == "") {

        $_SESSION["checkName"] = true;
        header("Location: ./login.php");
    } else if ($_POST["mdp"] != "cfitech") {

        $_SESSION["checkMdp"] = true;
        header("Location: ./login.php");
    } else {


        $_SESSION["connected"] = true;
        $_SESSION["name"] = $_POST["user"];
        $_SESSION["operationCount"] = 0;

        if (!isset($_SESSION["totalOperation"])) {

            $_SESSION["totalOperation"] = 0;
        }
    }
}


$title = "Mon profile";
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

                <p> Bienvenue <?php echo $_SESSION["name"] ?> dans votre page de profile ! </p>


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

            <h1><?php if (isset($_SESSION["totalOperation"])): echo $_SESSION["totalOperation"];
                else: ?>0<?php endif; ?></h1>

            <p> Vous avez effectué <span style="color: blue;"><?php if (isset($_SESSION["totalOperation"])): echo $_SESSION["totalOperation"];
                                                                else: ?>0<?php endif; ?></span> opérations mathématiques au total </p>

        </div>



    </div>

    <div class="footer-profil">


        <div class="no-operation" <?php if (isset($_SESSION["operation"])): ?> style="display: none;" <?php endif; ?>>



            <div class="icon">🧮</div>

            <p> Vous n'avez pas encore effectué d'opérations. Utilisez la calculatrice pour commencer ! </p>

        </div>

        <div class="operation" <?php if (!isset($_SESSION["operation"])): ?> style="display: none;" <?php endif; ?>>

            <div class="last-ope" <?php if (!isset($_SESSION["operation"])): ?> style="display: none;" <?php endif; ?>>

                <h3> Dernières opérations </h3>

                <div class="last addition" <?php if (empty(lastOperation("addition"))): ?> style="display: none;" <?php endif; ?>>

                    <p class="gris"> Dernière addition </p>
                    <?php $tabAddition = lastOperation("addition"); ?>

                    <p><?php echo $tabAddition["nb1"] . " + " . $tabAddition["nb2"] . " = "; ?><span style="color: var(--color-addition);"><?php echo $tabAddition["resultat"]; ?></span></p>

                </div>

                <div class="last soustraction" <?php if (empty(lastOperation("soustraction"))): ?> style="display: none;" <?php endif; ?>>

                    <p class="gris"> Dernière soustraction </p>
                    <?php $tabSoustraction = lastOperation("soustraction"); ?>

                    <p><?php echo $tabSoustraction["nb1"] . " - " . $tabSoustraction["nb2"] . " = "; ?><span style="color: var(--color-soustraction);"><?php echo $tabSoustraction["resultat"]; ?></span></p>


                </div>

                <div class="last multiplication" <?php if (empty(lastOperation("multiplication"))): ?> style="display: none;" <?php endif; ?>>

                    <p class="gris"> Dernière multiplication </p>
                    <?php $tabMultiplication = lastOperation("multiplication"); ?>

                    <p><?php echo $tabMultiplication["nb1"] . " x " . $tabMultiplication["nb2"] . " = "; ?><span style="color: var(--color-multiplication);"><?php echo $tabMultiplication["resultat"]; ?></span></p>


                </div>

                <div class="last division" <?php if (empty(lastOperation("division"))): ?> style="display: none;" <?php endif; ?>>

                    <p class="gris"> Dernière division </p>
                    <?php $tabDivision = lastOperation("division"); ?>

                    <p><?php echo $tabDivision["nb1"] . " / " . $tabDivision["nb2"] . " = "; ?><span style="color: var(--color-division);"><?php echo $tabDivision["resultat"]; ?></span></p>

                </div>

            </div>

            <div class="history" <?php if (!isset($_SESSION["operation"])): ?> style="display: none;" <?php endif; ?>>

                <h3> Historique complet des opérations </h3>

                <div class="title-history">

                    <h4 class="ope"> Opération </h4>

                    <div class="bloc-ope">


                        <h4 class="nb1"> Nombre 1 </h4>
                        <h4 class="nb2"> Nombre 2 </h4>
                        <h4 class="result"> Résultat </h4>

                    </div>

                </div>


                <?php

                foreach ($_SESSION["operation"] as $operation):

                    $type = $operation["type"];

                ?>

                    <div class="history-ope <?php echo $type; ?>">

                        <p class="ope" style="color: var(--color-<?php echo $type; ?>);background-color: var(--back-color-<?php echo $type; ?>)"><?php echo strtoupper($type); ?></p>

                        <div class="bloc-ope">


                            <p class="nb1"><?php echo $operation["nb1"]; ?></p>
                            <p class="nb2"><?php echo $operation["nb2"]; ?></p>
                            <p class="result"><?php echo $operation["resultat"] ?></p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</div>


<?php

require "./footer.php"

?>