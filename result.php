<?php
#beter geen eindtag voor PHP als je enkel php schrijft
#get is te zien in het URL, post niet

/*
$name = $_GET['name'];
#get is automatisch een array
$age = $_GET['age'];

echo 'My name is '. $name. ' and i\'m ' . $age . ' years old.';

#http://localhost/repositories/PHP%20main%20map/PHPsuperglobals/index.php?name=Dorien&age=24
#momenteel zelf in url ?name=Dorien&age=24 zetten

#maar nu doen we dit vanuit HTML
*/

/* METHODE OM TE GETTEN
#if(isset($_GET['name'])&& isset($_GET['age']))
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
  $name = $_GET['name'];
  $age = $_GET['age'];
  echo 'My name is '. $name. ' and i\'m ' . $age . ' years old.';
} else {
  die('Your form wasn\'t complete');
}
*/

/* METHODE OM TE POSTEN
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $name = $_POST['name'];
  $age = $_POST['age'];
  echo 'My name is '. $name. ' and i\'m ' . $age . ' years old.';
} else {
  die('Your form wasn\'t complete');
}
*/

/*met session zie ook bestand progress.php*/
session_start();

$name = $_SESSION['name'];
$age = $_SESSION['age'];
echo 'My name is '. $name. ' and i\'m ' . $age . ' years old.';

session_unset();
session_destroy();
