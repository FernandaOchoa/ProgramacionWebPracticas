<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario HTML</title>
  </head>
  <body>
    <h1>Rellena los campos (form.php)</h1>
    <form class="" action="form.php" method="post">
      <input type="radio" name="gender" value="0" checked=""> Sr.<br>
      <input type="radio" name="gender" value="1" checked=""> Sra.<br>
      Tu nombre:
      <input type="text" name="firstName"><br>
      Tu apellido:
      <input type="text" name="lastName" value="<?php if (isset($_POST['lastName'])) { echo $_POST['lastName'];} ?>">
      <input type="submit" name="submitbutton" value="Envialo!">
    </form>
    <?php
    if (isset($_POST['gender']) && $_POST['gender'] == 0) {
      echo " checked='checked'";
    }
    ?>
    <?php
    if (isset($_POST['gender'])&& $_POST['gender'] == 1) {
      echo " checked='checked'";
    }
    ?>
    <?php
    if (isset($_POST['firstName'])) {
      echo $_POST['firstName'];
    }
    ?>
    <?php
    if (isset($_POST['lastName'])) {
      echo $_POST['lastName'];
    }
    ?>
    <?php
    echo $_SERVER['PHP_SELF'];
    ?>
  </body>
</html>
