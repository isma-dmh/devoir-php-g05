<?php

session_start();

$title="RESET";
$nav="reset";
require "./header.php";


?>

<div class="reset">

    <h3>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw text-red-600" aria-hidden="true">
            <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
            <path d="M3 3v5h5"></path>
        </svg>

        Reset - Réinitialiser les Sessions

    </h3>


    <div class="warning">

        <svg class="danger" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert text-red-600 mt-1" aria-hidden="true">
            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
            <path d="M12 9v4"></path>
            <path d="M12 17h.01"></path>
        </svg>

        <h4> ⚠️ Attention : Cette action va réinitialiser toutes les sessions </h4>


        <ul>


            <li> Vous serez déconnecté </li>
            <li> Toutes les opérations en cours seront supprimées </li>
            <li> Le compteur total d'opérations sera réinitialisé </li>
            <li> Cette action est irréversible </li>

        </ul>

    </div>



    <form action="./" method="post" >
        
        
        <button type="submit" name="reset">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw text-red-600" aria-hidden="true">
                <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                <path d="M3 3v5h5"></path>
            </svg>
            Réinitialiser toutes les sessions
        </button>
        
    </form>

    <div class="about">

        <h4> Que fait cette action ? </h4>

        <span class="gris">

            Cette page simule l'arrêt de toutes les sessions PHP et déconnectera l'utilisateur.

        </span>

    </div>

</div>

<?php

require "footer.php"

?>