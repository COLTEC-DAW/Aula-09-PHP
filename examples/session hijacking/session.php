<?php
  session_id($_GET["PHPSESSID"]);
  session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <title></title>
  </head>
  <body>

    <h1>Olá <?php echo $_SESSION["login"]; ?>!!</h1>

    <p>
      O seu segredo é: <?php echo $_SESSION["segredo"]; ?>
    </p>
    <p>
      A chave do seu segredo (session id) é: <?php echo session_id(); ?>
    </p>
  </body>
</html>
