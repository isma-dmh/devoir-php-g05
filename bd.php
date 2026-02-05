<?php

session_start();
$nav = "database";
$title = "BD";

require "./header.php";

try {
    $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie';
    $resultatArticles = $pdo->query('SELECT * from articles');
    $resultatUsers = $pdo->query('SELECT * from users');
    $resultatUsersArticles = $pdo->query('SELECT CONCAT(u.firstname, " ", u.lastname) AS nomComplet, a.article_name  from users u INNER JOIN articles a ON a.id_user_article = u.id_user');
} catch (PDOException $e) {

    die('Erreur : ' . $e->getMessage());
}

?>



<section class="database" style="width: 80vw;">

    <?php

    // var_dump($resultatArticles->fetchAll());

    foreach ($resultatUsers as $user) {

        echo "<br><br>";

        foreach ($user as $cle => $object) {

            if ($cle == "id_user" || $cle == "firstname" || $cle == "lastname" || $cle == "gender" || $cle == "firstname" || $cle == "date_of_birth" || $cle == "city" || $cle == "weight_kg")

                echo $cle . " : " . $object . "<br>";
        }
    }


    foreach ($resultatUsersArticles as $user) {


        echo "<br>Nom de l'article : " . $user["article_name"] . "<br>";
        echo "Auteur de l'article : " . $user["nomComplet"] . "<br><br>";
    }

    ?>



</section>


<?php

require "./footer.php"

?>