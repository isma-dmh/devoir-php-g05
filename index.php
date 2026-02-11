<?php

session_start();

if (isset($_POST["reset"])) {

    session_destroy();
    header("Location: ./");

}

$title = "Accueil";
$nav = "accueil";
require "./header.php";


?>

<div class="main">


    <img src="./assets/images/15431.jpg">

    <!-- partie modifier -->

    <div class="txt">


        <h3>🌍Bienvenue sur CFI Tech currency converter</h3>

        <p>
            Notre plateforme vous permet de convertir instantanément l'Euro vers les monnaies les plus utilisées au
            monde (Dollar, Yen, Franc RDC, etc.). Profitez de taux actualisés et d'un historique complet de vos
            transactions.
        </p>

        <p class="gris">

            Commencer maintenant

        </p>


    </div>

</div>

<div class="card">

    <div class="itemcard">

        <span class="icon"> 🔐 </span>

        <h3> Sécurisé</h3>

        <span>

            Système de connexion sécurisé avec gestion des sessions

        </span>

    </div>

    <div class="itemcard">

        <span class="icon"> 📊 </span>


        <h3> Historique </h3>

        <span>

            Gardez une trace de toutes vos Conversion

        </span>



    </div>

    <div class="itemcard">

        <span class="icon"> 🏦 </span>


        <h3> Calculatrice </h3>

        <span>

            Taux de change actualisés pour 6 devises majeures (USD, JPY, MAD...)

        </span>


    </div>
    <div class="itemcard">
        <span class="icon"> 🔄 </span>
        <h3>Bidirectionnel</h3>
        <span>
            Convertissez dans les deux sens (ex: Euro vers Yen et Yen vers Euro).
        </span>
    </div>

    <div class="itemcard">
        <span class="icon"> 📜 </span>
        <h3>Historique</h3>
        <span>
            Retrouvez le détail de toutes vos transactions dans votre profil.
        </span>


    </div>

    
        <div class="itemcard">

            <span class="icon"> 💱 </span>


            <h3> Convertisseur devise </h3>

            <span>

                utilisez notre convertisseur pour convertir vos euros parmis 6 devises differentes

            </span>



        </div>



    <?php

    require "footer.php"

        ?>