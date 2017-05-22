<?php
  session_id($_POST["sid"]);
  $sid = session_id();
  session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <title></title>
  </head>
  <body>
      <p>
        Segredo acessado com chave: <?php echo $sid; ?>
      </p>

    <p>
      <a href=<?php echo "session.php?" . SID; ?> >Visualizar segredo!!</a>
    </p>

  </body>
</html>
