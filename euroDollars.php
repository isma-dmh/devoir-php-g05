<?php

session_start();
$title = "Conversion";
$nav = "euroDollars";
require "./header.php";
require "./fonctions/functionsMath.php";


if (!connected($_SESSION)){

header("Location: ./login.php");

}

if (isset($_POST["nb1"]) && isset($_POST["nb2"])) {

    if($_POST["nb1"]!=""&& $_POST["nb2"]!=""){

        
        $_SESSION["operation"][] = addition($_POST["nb1"], $_POST["nb2"]);
        
        $_SESSION["operationCount"]++;
        $_SESSION["totalOperation"]++;
    }
    
};


?>

<div class="calcul">

    <h3>Addition</h3>


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

        <div class="svg-container">


            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus text-blue-600" aria-hidden="true">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
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

                                                                            if ($_POST["nb1"] != "" && $_POST["nb2"] != ""):

                                                                                echo (int)$_POST["nb1"] + (int)$_POST["nb2"];

                                                                            else: ?>?<?php
                                                                            endif; ?><?php else: ?>?<?php endif; ?>">

        </div>



        <button type="submit" class="blue"> Calculer </button>

    </form>

    <h3 class="background"> 💡 L'addition vous permet d'additionner deux nombres ensemble </h3>

</div>

<?php

require "./footer.php"

?>