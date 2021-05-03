<?php
  // Variabili
  $frase= "In tempi di gloria, emergono gli eroi. In tempi di merda, tutti gli stronzi vengono a galla.";
  $parolaccia= $_GET["parolaccia"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badwords</title>
  </head>
  <body>
    <h2>Frase originale</h2>
    <p><?php echo $frase; ?></p>
    <h2>Lunghezza</h2>
    <p><?php echo 'La lunghezza della frase è: '.strlen($frase); ?></p>
    <?php if(strpos($frase, $parolaccia)): ?>
      <h2>Frase censurata</h2>
      <p><?php echo str_replace($parolaccia, "***", $frase); ?></p>
      <p><?php echo "Parolaccia: $parolaccia"; ?></p>
    <?php endif; ?>
  </body>
</html>
