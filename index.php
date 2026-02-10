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



    <div class="txt">


        <h3>Bienvenue sur CFI Tech currency converter</h3>

        <p>
            Ce site web combine utilité et divertissement en proposant deux fonctionnalités principales. D'une part, un convertisseur de devises pratique permettant de calculer rapidement les taux de change entre différentes monnaies du monde. D'autre part, un jeu de mémoire captivant où les utilisateurs doivent retrouver les paires de symboles monétaires ($, €, £, ¥, etc.) cachées derrière des cartes. Le principe est simple : cliquez sur deux cartes pour les retourner, si les symboles correspondent, elles disparaissent du jeu ; sinon, elles se retournent à nouveau face cachée. Ce mini-jeu teste votre mémoire et votre concentration tout en vous familiarisant avec les différents symboles de devises internationales, transformant l'apprentissage des monnaies en une expérience ludique et interactive. L'objectif est de faire disparaître toutes les paires pour gagner la partie.

        </p>

        <p class="gris">

            Développé dans le cadre du mini projet PHP-HTML.

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

            Gardez une trace de toutes vos <br> converstions 

        </span>



    </div>

    <div class="itemcard">

        <span class="icon"> 💱 </span>


        <h3> Convertisseur  devise </h3>

        <span>

           utilisez notre convertisseur pour convertir vos euros parmis 6 devises differentes

        </span>



    </div>


</div>



<?php

require "footer.php"

?>