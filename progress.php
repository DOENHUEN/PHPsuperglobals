<?php
session_start();
#moet je op elke pagina opnieuw laten starten
#session_unset en session_destroy

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = isset($_POST['name'])? $_POST['name'] : '';
  $age = isset($_POST['age'])? intval($_POST['age']) : '';

  if (is_int($age) && $age>0 && is_string($name))
  {
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    header('Location: result.php');
  }else{
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    header('Location: index.php');
  }


  //var_dump($_SESSION);
} else {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['age'] = $_POST['age'];

  header('Location: index.php');
}
