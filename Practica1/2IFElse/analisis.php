<?php
  if ($_POST['gender'] == 0) {
    echo "Hola Sr.<br>";
  } else {
    echo "Hola Sra. <br>";
  }
  echo "Hola <b>{$_POST{'lastName'}}</b>, encantado de saludarte";
?>
