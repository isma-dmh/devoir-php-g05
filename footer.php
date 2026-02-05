</main>

<footer>

    <div>


        <a href="./index.php"> <span <?php if ($nav == "accueil"): ?>class="focus" <?php endif; ?>>◯</span> Accueil</a>
        <a href="./session.php"> <span <?php if ($nav == "debug"): ?>class="focus" <?php endif; ?>>◯</span> Debug </a>
        <a href="./reset.php"> <span <?php if ($nav == "reset"): ?>class="focus" <?php endif; ?>>◯</span> Reset </a>

    </div>

    <div>


        <span> © Cfitech 2025-2026 </span>
        <time id="horloge"></time>

    </div>

    <!-- Pour le SCRIPT j'ai utiliser l'ia mais je l'ai compris -->

    <script>
        function actualiser() {
            document.getElementById('horloge').textContent = new Date().toLocaleString('fr-FR');
        }
        setInterval(actualiser, 1000);
        actualiser();
    </script>

</footer>


</body>

</html>