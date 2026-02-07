<?php

session_start();
$nav="login";
require "./header.php";

if(connected($_SESSION)){

header("Location: ./profil.php");

}




?>

<style>

body{

background-color: white;

}

</style>

<div class="log">

    <div class="svg-container">


        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in text-blue-600" aria-hidden="true">
            <path d="m10 17 5-5-5-5"></path>
            <path d="M15 12H3"></path>
            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
        </svg>

    </div>
    <h3>Connexion</h3>

    <p class="gris"> Connectez-vous pour accéder à la calculatrice </p>

        <?php if (isset($_SESSION["checkMdp"]) && isset($_SESSION["checkName"])):

        if ($_SESSION["checkMdp"] && $_SESSION["checkName"]): ?>

            <span style="color: red;"> Veuillez introduire votre nom ! </span>
            <span style="color: red;"> Veuillez introduire cfitech comme mot de passe ! </span>

        <?php elseif ($_SESSION["checkMdp"]): ?>

            <span style="color: red;"> Veuillez introduire cfitech comme mot de passe ! </span>

        <?php elseif ($_SESSION["checkName"]): ?>

            <span style="color: red;"> Veuillez introduire votre nom ! </span>

    <?php endif;

            $_SESSION["checkMdp"]=false;
            $_SESSION["checkName"]=false;

    endif;  ?>

    <form action="./profil.php" method="post">

        <label for="user"> Prénom </label> <br>
        <input type="text" placeholder="Entrez votre prénom" name="user" id="user"><br>

        <label for="mdp">Mot de passe</label> <br>
        <input type="password" placeholder="*********" id="mdp" name="mdp"><br>
        <span class="gris">Mot de passe: cfitech</span> <br>

        <button type="submit">

            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in text-blue-600" aria-hidden="true">
                <path d="m10 17 5-5-5-5"></path>
                <path d="M15 12H3"></path>
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
            </svg>

            <p> Se connecter</p>


        </button>


    </form>

    <span class="gris"> Utilisez n'importe quel prénom et le mot de passe "cfitech" </span>

</div>

<?php

require "./footer.php"

?>