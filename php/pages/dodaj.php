<p id="opis">
    Poniżej możesz dodać nowe kamyki do listy!
</p>

<article id="art-dodaj">
    <div class="rock" id="dod1">
    <form action="index.php?id=51" method="post">
        <label for="kamyk-imie">Imię</label><br>
        <input type="kamyk-imie" id="kamyk-imie" name="kamyk-imie" 
                placeholder="Podaj imię 🪨" required><br>
        

        <label for="kamyk-kolor">Kolor</label><br>
        <input type="color" id="kamyk-kolor" name="kamyk-kolor" 
                value="#fafafa" placeholder="Podaj kolor 🪨" required><br>
        

        <label for="kamyk-wielkosc">Wielkość</label><br>
        <select id="kamyk-wielkosc" name="kamyk-wielkosc" 
                placeholder="Podaj wielkość 🪨" required><br>
            <option value="Malutki">Malutki</option>
            <option value="Mały">Mały</option>
            <option value="Średni">Średni</option>
            <option value="Duży">Duży</option>
        </select><br>

        <label for="kamyk-data">Data znalezienia</label><br>
        <input type="date" id="kamyk-data" name="kamyk-data" 
                placeholder="Podaj datę znalezienia 🪨" required><br>

        <label for="kamyk-opis">Opis</label><br>
        <textarea id="kamyk-opis" name="kamyk-opis" maxlength="180"
                rows="5" cols="20" placeholder="Podaj opis 🪨" pattern="[A-Za-z0-9]+"></textarea><br>
          
        <button type="submit">Dodaj kamyka</button>
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'php/activities/dodaj_dodaj.php';
    }
    else {
        echo "
        <div class=\"rock\" id=\"dod2\">   
        <div class=\"rock-image\">
            <img alt=\"wyglad\" >
        </div>
        <p>Powyżej jest wygląd, jaki kamyk będzie posiadał.</p>
        </div>
        ";
    }
    ?>
</article>

<script src="scripts/color_picker.js"></script>
<script src="scripts/copy_to_clipboard.js"></script>