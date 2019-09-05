<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ToDo</title>
  </head>
  <body>
    <main>
      <?php
        $strLung = $_GET["lung"]; //prendo la lunghezza dall'URL
        $strAlt = $_GET["alt"]; //prendo l'altezza dall'URL
        $strLarg = $_GET['larg']; //Prendo la larghezza dall'URL

        $volStr = $strLung * $strAlt * $strLarg;
      ?>

      <h1>Dimensioni</h1>

      <p>Lunghezza: <?php echo $strLung; ?> cm</p> <!-- stampo la lunghezza dall'URL -->
      <p>Altezza: <?php echo $strAlt; ?> cm</p> <!-- stampo l'altezza dall'URL -->
      <p>Larghezza: <?php echo $strLarg; ?> cm</p> <!-- stampo la larghezza dall'URL -->

      <br>

      <p>Volume: <?php echo $volStr; ?></p> <!-- Stampo volume -->
    </main>
  </body>
</html>

<!-- ToDo: SALUTARE L'INTERLOCUTORE -->
