<p id="opis">
    Poniżej możesz edytować kamyki z listy!
</p>
<article id="art-lista">
<?php
    require_once 'php/activities/polacz_z_baza.php';
    $baza = @new mysqli($host, $db_user, $db_password, $db_name);
    $baza->set_charset( 'utf-8' );

    $lista = "SELECT * FROM kamyki";

    $wynik = mysqli_query($baza, $lista);

    $baza->close();
    while ($line = mysqli_fetch_assoc($wynik)) {
        include "php/activities/cechy_kamienia.php";
        echo    "<a href='index.php?id=31&sid=".$line['id']."'>
                    <button title=\"Edytuj\"  class=\"edytuj\">📒</button>
                </a>
            </div>";
    }

?>
</article>
<script src="scripts/copy_to_clipboard.js"></script>