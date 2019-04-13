<?php
if (isset($_POST['pw'])) {
  $pw = $_POST['pw'];
  if ($pw == "818181") {
    header("Location: newpage1.html");
  } else if ($pw == "212121") {
    header("Location: newpage2.html");
  } else {
    header("Location: sorry.html");
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Redirección If/Else</title>
  </head>
  <body>
    <h2>Redireccion If/Else</h2><br>
    <form action="<?php echo
    $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="pw">
    <input type="submit" value="Envialo">
  </form>
  </body>
</html>
