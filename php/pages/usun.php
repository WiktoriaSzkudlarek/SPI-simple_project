<p id="opis">
    Kamyki usuwane z listy mają całkowicie zmienianą tożsamość, przez co ponowne ich namierzenie nie będzie możliwe.<br>
    Dlatego należy ostrożnie decydować o dalszym losie chowańców!
</p>
<article id="art-lista">
<?php
    require_once 'php/activities/polacz_z_baza.php'; 
    $baza = @new mysqli($host, $db_user, $db_password, $db_name);
    $baza->set_charset( 'utf-8' );

    $lista = "SELECT * FROM kamyki";

    $wynik = mysqli_query($baza, $lista);

    while ($line = mysqli_fetch_assoc($wynik)) {
        include "php/activities/cechy_kamienia.php";
        echo "
                <a href='php/activities/usun_usun.php?id=".$line['id']."'>
                    <button class=\"usun\" title=\"Usuń\" >🗑️</button>
                </a>
            </div>";
    }

    $baza->close();
?>
</article>

<script src="scripts/copy_to_clipboard.js"></script>