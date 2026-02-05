<?php

session_start();
$title = "Division";
$nav = "division";
require "./header.php";
require "./fonctions/functionsMath.php";


if (!connected($_SESSION)){

header("Location: ./login.php");

}

if (isset($_POST["nb1"]) && isset($_POST["nb2"])) {

    if($_POST["nb1"]!=""&& $_POST["nb2"]!=""){

        
        if ($_POST["nb2"] != 0) {
            
            
            $_SESSION["operation"][] = division($_POST["nb1"], $_POST["nb2"]);
            
            $_SESSION["operationCount"]++;
            $_SESSION["totalOperation"]++;
        };
    }

};


?>

<div class="calcul">

    <h3>Division</h3>



    <form method="post">

        <div class="input">


            <label for="nb1" class="gris"> Nombre 1 </label>

            <input type="number" name="nb1" placeholder="<?php if (isset($_POST["nb1"])  && isset($_POST["nb2"])):

                                                                if ($_POST["nb1"] != "" && $_POST["nb2"] != ""):

                                                                    echo $_POST["nb1"];

                                                                else: ?>0<?php

                                                                        endif;

                                                                    else : ?>0<?php

                                                                    endif; ?>">

        </div>

        <div class="svg-container beige">


            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-divide text-orange-600" aria-hidden="true">
                <circle cx="12" cy="6" r="1"></circle>
                <line x1="5" x2="19" y1="12" y2="12"></line>
                <circle cx="12" cy="18" r="1"></circle>
            </svg>

        </div>

        <div class="input">

            <label for="nb2" class="gris"> Nombre 2 </label>

            <input type="number" name="nb2" placeholder="<?php if (isset($_POST["nb1"])  && isset($_POST["nb2"])):

                                                                if ($_POST["nb1"] != "" && $_POST["nb2"] != ""):

                                                                    echo $_POST["nb2"];

                                                                else: ?>0<?php

                                                                        endif;

                                                                    else: ?>0<?php

                                                                    endif; ?>">


        </div>

        <div class="svg-container green">


            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-equal text-green-600" aria-hidden="true">
                <line x1="5" x2="19" y1="9" y2="9"></line>
                <line x1="5" x2="19" y1="15" y2="15"></line>
            </svg>

        </div>

        <div class="input">

            <label for="resultat" class="gris"> Résultat </label>

            <input type="number" name="resultat" readonly placeholder="<?php if (isset($_POST["nb1"]) && isset($_POST["nb2"])):

                                                                            if ($_POST["nb1"] != "" && $_POST["nb2"] != "" && $_POST["nb2"] != 0):

                                                                                echo (int)$_POST["nb1"] / (int)$_POST["nb2"];

                                                                            else: ?>?<?php
                                                                                    endif; ?><?php else: ?>?<?php endif; ?>">

        </div>

        <?php if (isset($_POST["nb2"]) && $_POST["nb2"] == 0): ?><p style="color: red; margin:auto">Division par 0 impossible !!</p><?php endif; ?>

        <button type="submit" class="blue"> Calculer </button>

    </form>

    <h3 class="background" style="line-height: 2.2rem;"> 💡 La division vous permet de diviser le premier nombre par le deuxième

        <p style="color: red;">⚠️ Attention : Le diviseur ne peut pas être égal à 0 </p>

    </h3>



</div>

<?php

require "./footer.php"

?>