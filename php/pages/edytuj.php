<p id="opis">
    Poniżej możesz edytować kamyka z listy!
</p>
<article id="art-dodaj">
<?php
    require_once 'php/activities/polacz_z_baza.php';
    $baza = @new mysqli($host, $db_user, $db_password, $db_name);
    $baza->set_charset( 'utf-8' );

    $id = $_GET['sid'];
    $zapytanie = "SELECT * FROM kamyki WHERE id=$id";                     

    $wynik = mysqli_query($baza, $zapytanie);

    $line = mysqli_fetch_assoc($wynik);
    $baza->close();
?>
    <div class="rock" id="dod1">
    <form action='index.php?id=32&sid=<?php echo $id ?>' method="post">
        <label for="kamyk-imie">Imię</label><br>
        <input type="kamyk-imie" id="kamyk-imie" name="kamyk-imie"
                value="<?php echo $line['imie'];?>" 
                placeholder="Podaj imię 🪨" required><br>
        

        <label for="kamyk-kolor">Kolor</label><br>
        <input type="color" id="kamyk-kolor" name="kamyk-kolor" 
                value="<?php echo $line['kolor'];?>" 
                placeholder="Podaj kolor 🪨" required><br>
        

        <label for="kamyk-wielkosc">Wielkość</label><br>
        <select id="kamyk-wielkosc" name="kamyk-wielkosc" 
                value="<?php echo $line['wielkosc'];?>"
                placeholder="Podaj wielkość 🪨" required><br>
            <option value="Malutki">Malutki</option>
            <option value="Mały">Mały</option>
            <option value="Średni">Średni</option>
            <option value="Duży">Duży</option>
        </select><br>

        <label for="kamyk-data">Data znalezienia</label><br>
        <input type="date" id="kamyk-data" name="kamyk-data" 
                value="<?php echo $line['data_znalezienia'];?>"
                placeholder="Podaj datę znalezienia 🪨" required><br>

        <label for="kamyk-opis">Opis</label><br>
        <textarea id="kamyk-opis" name="kamyk-opis" maxlength="180"
                value="<?php echo $line['opis'];?>"
                rows="5" cols="20" placeholder="Podaj opis 🪨"><?php echo $line['opis'];?></textarea><br>
          
        <button type="submit">Edytuj kamyka</button>
    </form>
    </div>



    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            include 'php/activities/edytuj_wyslij.php';
        }
        else {
            $kolor=$line['kolor'];
            echo "
            <div class=\"rock\" id=\"dod2\">   
            <div class=\"rock-image\">
                <img alt=\"wyglad\" style=\"background: $kolor none repeat scroll 0% 0%;\">
            </div>
            <p>Powyżej jest wygląd, jaki kamyk będzie posiadał.</p>
            </div>
            ";
            
        }
        ?>

</article>

<script src="scripts/color_picker.js"></script>
<script src="scripts/copy_to_clipboard.js"></script>