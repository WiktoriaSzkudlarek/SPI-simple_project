<!DOCTYPE html>
<html lang="pl">
<html>
  <head>
    <meta charset="utf-8">
    <title>Strona o kamykach</title>
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <body>
    <nav>
      <a href="index.php" title="Strona domowa 🏡">🏠</a>
      <a href="index.php?id=2" title="Lista kamyków 📓">Lista 🪨</a>
      <a href="index.php?id=3" title="Edytuj kamyka ✏">Edytuj 🪨</a>
      <a href="index.php?id=4" title="Usuń kamyka 😢">Usuń 🪨</a>
      <a href="index.php?id=5" title="Dodaj kamyka 😀">Dodaj 🪨</a>
      <a href="index.php?id=6" title="Zainteresowania">🗿</a>
    </nav>
    <main id="tresc">
    <?php
    $id = isset($_GET['id']) ? $_GET['id'] : '';
      switch($id) {
        case 2:
          include("php/pages/lista.php");
        break;
        case 3:
          include("php/pages/edytuj_edytuj.php");
        break;
        case 31: case 32:
          include("php/pages/edytuj.php");
        break;
        case 4:
          include("php/pages/usun.php");
        break;
        case 5: case 51:
          include("php/pages/dodaj.php");
        break;
        case 6:
          include("php/pages/zainteresowania.php");
        break;
        default:
          include("php/pages/glowna.php");
      }
    ?>
    </main>
    <footer>
      <p>Wiktoria Szkudlarek, grupa 5</p>
    </footer>
  </body>
</html>
