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
    <link rel="stylesheet" <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>



<body>


    <?php

    // var_dump($_SESSION);
    // var_dump($_POST);  

    require "./fonctions/connected.php";


    ?>

    <header>


        <div class="group">

            <i class="fas fa-calculator"></i>

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

                    Calculatrice

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down group-hover:rotate-180 transition-transform duration-200" aria-hidden="true">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>

                </p>

                <ul>

                    <li> <a href="./addition.php" class="nav" <?php if ($nav == "addition"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>><span class="operateur">➕</span> Addition</a> </li>

                    <li> <a href="./multiplication.php" class="nav" <?php if ($nav == "multiplication"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>> <span class="operateur">✖️</span> Multiplication</a> </li>

                    <li> <a href="./division.php" class="nav" <?php if ($nav == "division"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>><span class="operateur">➗</span> Division</a> </li>

                    <li> <a href="./soustraction.php" class="nav" <?php if ($nav == "soustraction"): ?>style="color: rgb(4, 255, 4);" <?php endif; ?>><span class="operateur">➖</span> Soustraction</a> </li>

                </ul>

            </div>

            <a href="./profil.php" class="nav <?php if ($nav == "profil"): ?>light<?php endif; ?>">Profil</a>

            <a href="./bd.php" class="nav <?php if ($nav == "database"): ?>light<?php endif; ?>" <?php if (!connected($_SESSION)): ?> style="display: none" <?php endif; ?>>Base de données</a>

            <a href="./logout.php" class="nav" <?php if (!connected($_SESSION)): ?> style="display: none" <?php endif; ?>>Déconnexion</a>

            <a href="./login.php" class="nav <?php if ($nav == "login"): ?>light<?php endif; ?>" <?php if (connected($_SESSION)): ?> style="display: none" <?php endif; ?>>Connexion</a>

        </nav>

    </header>

    <main>