<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->

<!-- *** http://localhost/php-badwords/?badword=dolor *** -->

<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  $badword = $_GET['badword'];
  $lunghezza = strlen($testo);
  $sostituzione = str_replace($badword, '***', $testo);

  // echo $sostituzione;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badwords</title>
  </head>
  <body>
    <p>La parola <?php echo $badword ?> verrà sostituita da '***'</p>
    <p><?php echo $sostituzione ?></p>
    <p>Lunghezza del paragrafo: <?php echo $lunghezza ?></p>
  </body>
</html>
