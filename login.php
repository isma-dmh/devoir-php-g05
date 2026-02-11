<?php

session_start();
$nav = "login";
require "./header.php";

if (connected($_SESSION)) {

    header("Location: ./profil.php");
}




?>

<style>
    body {

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

    <p class="gris"> Connectez-vous pour accéder à l'outil de conversion </p>

    <?php if (isset($_SESSION["checkUser"])):

        if ($_SESSION["checkUser"]): ?>

            <span style="color: red;"> Champ Incorrect !!! </span>

    <?php endif;

        $_SESSION["checkUser"] = false;

    endif;  ?>

    <form action="./profil.php" method="post">

        <label for="userLastname"> Nom </label> <br>
        <input type="text" placeholder="Entrez votre prénom" name="userLastname" id="user lastname"><br>

        <label for="userFirstname"> Prénom </label> <br>
        <input type="text" placeholder="Entrez votre prénom" name="userFirstname" id="user firstname"><br>

        <label for="userMdp">Mot de passe</label> <br>
        <input type="password" placeholder="*********" id="user mdp" name="userMdp"><br>
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

    <span class="gris"> Utilisez n'importe quel nom et prénom et le mot de passe "cfitech" </span>

</div>

<?php

require "./footer.php"

?>