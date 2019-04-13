<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario HTML</title>
  </head>
  <body>
    <h1>Rellena los campos (form.php)</h1>
    <form class="" action="form.php" method="post">
      <!-- Hombre -->
      <input type="radio" name="gender" value="0" checked="<?php
      if (isset($_POST['gender']) && $_POST['gender'] == 0) {
        echo " checked='checked'";
      }
      ?>"> Sr.<br>

      <!-- Mujer -->
      <input type="radio" name="gender" value="1" <?php
      if (isset($_POST['gender'])&& $_POST['gender'] == 1) {
        echo " checked='checked'";
      }
      ?>> Sra.<br>

      <!-- Nombre -->
      Tu nombre:
      <input type="text" name="firstName" value="<?php
      if (isset($_POST['firstName'])) {
        $Name = $_POST['firstName'];
        $Name = htmlspecialchars($Name);
        $Name = stripslashes($Name);
        echo $Name;
      }
      ?>"><br>

      <!-- Apellido -->
      Tu apellido:
      <input type="text" name="lastName" value="<?php
      if (isset($_POST['lastName'])) {
        $LastName = $_POST['lastName'];
        $LastName = htmlspecialchars($LastName);
        $LastName = stripslashes($LastName);
        echo $LastName;
      }
      ?>"><br>

      <!-- Comentario -->
      Tu comentario:
      <textarea name="comment" cols="60" rows="4">
        <?php
        if (isset($_POST['comment'])) {
          $comment = $_POST['comment'];
          $comment = htmlspecialchars($comment);
          $comment = stripslashes($comment);
          echo $comment;
        } ?>
      </textarea>

      <!-- Button -->
      <input type="submit" name="submitbutton" value="Envialo!">
    </form>
    <?php
    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo "<br><b>Has dicho: </b><br>\n";
    $comment = nl2br($comment);
    echo $comment;
    echo "<b>$Name</b>, encantado de saludarte.\n";
    ?>
  </body>
</html>
