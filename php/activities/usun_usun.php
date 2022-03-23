<?php
    require_once 'polacz_z_baza.php';
    $baza = @new mysqli($host, $db_user, $db_password, $db_name);
    $baza->set_charset( 'utf-8' );

    $id = $_GET['id'];
    $zapytanie = "DELETE FROM kamyki WHERE id = '".$id."' ";

    $wynik = mysqli_query($baza, $zapytanie);
    
    if (mysqli_query($baza, $zapytanie)) {
        mysqli_close($baza);
        header('Location: ../../index.php?id=4');
        exit;
    } else {
        echo "Nie udało się usunąć kamyka";
    }

    $baza->close()
?>