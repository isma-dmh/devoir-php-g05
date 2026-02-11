</main>

<footer>

    <div>


        <a href="./index.php"> <span <?php if ($nav == "accueil"): ?>class="focus" <?php endif; ?>>◯</span> Accueil</a>
        <a href="./profil.php"> <span <?php if ($nav == "profil"): ?>class="focus" <?php endif; ?>>◯</span> Profil </a>
        <a href="./jeuxMonnaies.php"> <span <?php if ($nav == "jeuxMonnaies"): ?>class="focus" <?php endif; ?>>◯</span>
            Jeux des monnaies</a>
        <a href="./login.php"> <span <?php if ($nav == "login"): ?>class="focus" <?php endif; ?>>◯</span> login</a>
    </div>

    <div>


        <span> © Cfitech 2025-2026 </span>
        <!-- une fonction php pour l'heure -->
        <?php
        date_default_timezone_set('Europe/Brussels');
        echo date('d/m/Y H:i:s');
        ?>

    </div>


</footer>


</body>

</html>