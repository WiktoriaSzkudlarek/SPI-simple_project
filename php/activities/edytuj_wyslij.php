<?php
require_once 'php/activities/polacz_z_baza.php';
$baza = @new mysqli($host, $db_user, $db_password, $db_name);
$baza->set_charset( 'utf-8' );

$id = $_GET['sid'];
$imie = $_POST['kamyk-imie'];
$kolor = $_POST['kamyk-kolor'];
$wielkosc = $_POST['kamyk-wielkosc'];
$data = $_POST['kamyk-data'];
$opis = $_POST['kamyk-opis'];

$zapytanie = "UPDATE kamyki SET
imie='$imie',
kolor='$kolor',
wielkosc='$wielkosc',
data_znalezienia='$data',
opis='$opis' 
WHERE id=$id";                

$wynik = mysqli_query($baza, $zapytanie);
if(!$wynik)
    echo "Dane nie zostaly zapisane.<br>";

$baza->close();

?>
<div class="rock" id="dod3">
    <p>Edytowano następującego kamyka:</p>
    <div class="rock-image">
        <img alt="wyglad" style="background: <?php echo $kolor?>;">
    </div>
    
    <p>imię: <br> <b><?php echo $imie?></b></p>
    <p>kolor: <span style="
        background: <?php echo $kolor?>;
        color: <?php echo $kolor?>;
        "><?php echo $kolor?></span></p>
    <p>Wielkość: <br><b><?php echo $wielkosc?></b><br></p>
    <p>Data znalezienia: <br><b><?php echo $data?></b></p>
    <p class="rock-desc"><?php echo $opis?></p>
</div>