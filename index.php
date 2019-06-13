<?php
  //creare una variabile con del testo (es: lorem ipsum).
  // Leggere dal parametro GET un parola da censurare e stampare a schermo un paragrafo
  // contenente il testo con 3 * (3 caratteri di asterisco) al posto della badword.
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  echo $testo; //stampo il testo

  $badword = $_GET['badword'];//imposto badword

  $final_text = str_ireplace($badword, '***', $testo); //sostituisco badword

  echo '<br><b>Il testo sostituito è: </b><br>';
  echo $final_text; //stampo testo con sostituzione
?>
