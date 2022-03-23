<?php
echo "
<div class=\"rock\">
    <div class=\"rock-image\">
        <img alt=\"wygląd\" 
            style=' background: " .$line['kolor']. ";'>
    </div>
    <p>
        Imię: <br>
        <b>" .$line['imie']. "</b>
    </p>
    <p>
        Kolor: <span style='
            background: " .$line['kolor']. ";
            color: " .$line['kolor'] . ";'>" 
            .$line['kolor'] . "</span>
    </p>
    <p>
        Wielkość: <br>
        <b>" .$line['wielkosc']. "</b>
    </p>
    <p>
        Data znalezienia: <br>
        <b>" .$line['data_znalezienia']. "</b></p>
    <p class=\"rock-desc\">" .$line['opis']. "
    </p>";
?>