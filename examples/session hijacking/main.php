<?php session_start(); ?>

<!DOCTYPE html>

<html>
  <head>

  </head>
  <body>
    <?php
      $nome =  htmlspecialchars($_POST["login"]);
      $senha = htmlspecialchars($_POST["segredo"]);

      $_SESSION["login"] = $nome;
      $_SESSION["segredo"] = $senha;
    ?>

    <p>
      Segredo cadastrado com sucesso!! <?php echo SID; ?>
    </p>
    <p>
      <a href=<?php echo "session.php?" . SID; ?> >Visualizar chave do segredo</a>
    </p>


  </body>
</html>
