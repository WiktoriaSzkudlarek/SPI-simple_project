<p id="opis">
    Poniżej znajduje się lista kamyków będących pod naszą opieką!
</p>
<article id="art-lista">
    <?php
    require_once 'php/activities/polacz_z_baza.php';

    $baza = @new mysqli($host, $db_user, $db_password, $db_name);
    $baza->set_charset( 'utf-8' );

    $lista = "SELECT imie, kolor, wielkosc, data_znalezienia, opis FROM kamyki";
    $wynik = mysqli_query($baza, $lista);

    while ($line = mysqli_fetch_assoc($wynik)) {
        include "php/activities/cechy_kamienia.php";
        echo "</div>";
    }

    $baza->close();
    ?>

</article>

<script src="scripts/copy_to_clipboard.js"></script>