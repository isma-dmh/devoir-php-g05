<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?php

        if (isset($title)) {

            echo $title;
        } else {

            echo "Onglet";
        }

        ?>

    </title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>



<body>


    <?php

    // var_dump($_SESSION);
    // var_dump($_POST);  

    require "./fonctions/connected.php";


    ?>

    <header>


        <div class="group">

            <img class="logo" src="./assets/images/image.png"></i>

            <div>

                <h1>CFI Tech currency converter
                </h1>
                <span> Projet PHP Mini </span>

            </div>

        </div>

        <input type="checkbox" id="checkburger">
        <label for="checkburger" class="burger">

            <span class="barre"></span>
            <span class="barre"></span>
            <span class="barre"></span>

        </label>

        <nav>

            <a href="./index.php" class="nav <?php if ($nav == "accueil"): ?>light<?php endif; ?>">Accueil</a>

            <div class="nav calculatrice" <?php if (!connected($_SESSION)): ?> style="display: none" <?php endif; ?>>

                <p>

                    Conversion

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down group-hover:rotate-180 transition-transform duration-200" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>

                </p>

                <ul>

                    <li> <a href="./euroDollars.php" class="nav" <?php if ($nav == "euroDollars"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Dollars
                        </a> </li>

                    <li> <a href="./euroYen.php" class="nav" <?php if ($nav == "euroYen"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Yen</a> </li>

                    <li> <a href="./euroPounds.php" class="nav" <?php if ($nav == "euroPounds"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Pounds</a> </li>

                    <li> <a href="./EuroFrancsRdc.php" class="nav" <?php if ($nav == "euroFrancsRdc"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Francs-RDC</a> </li>

                    <li> <a href="./EuroDirham.php" class="nav" <?php if ($nav == "euroDirham"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Dirham
                        </a> </li>

                    <li> <a href="./EuroFrancsSuisses.php" class="nav" <?php if ($nav == "euroFrancsSuisses"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> Euro/Francs-Suisses</a> </li>


                </ul>

            </div>

            <a href="./profil.php" class="nav <?php if ($nav == "profil"): ?>light<?php endif; ?>">Profil</a>

            <a href="./jeuxMonnaies.php" class="nav <?php if ($nav == "jeuxMonnaies"): ?>light<?php endif; ?>">Jeux des monnaies</a>

            <a href="./logout.php" class="nav" <?php if (!connected($_SESSION)): ?> style="display: none" <?php endif; ?>>Logout</a>

            <a href="./login.php" class="nav <?php if ($nav == "login"): ?>light<?php endif; ?>" <?php if (connected($_SESSION)): ?> style="display: none" <?php endif; ?>>login</a>

        </nav>

    </header>

    <main>