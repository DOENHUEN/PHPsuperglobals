<?php
  session_start();

  $input_name = isset($_SESSION['name'])? $_SESSION['name'] : '' ;
  $input_age = isset($_SESSION['age'])? $_SESSION['age'] : '' ;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<!--
  <form action="result.php" method="get">
    <input type="text" name="name">
    <br/>
    <input type="text" name="age">
    <br/>
    <input type="submit" value="send">
  </form>

  <form action="result.php" method="post">
    <input type="text" name="name">
    <br/>
    <input type="text" name="age">
    <br/>
    <input type="submit" value="send">
  </form>
-->

<!-- dit is met session, zie ook progress.php-->
  <form action="progress.php" method="post">
    <input type="text" name="name" value="<?php echo $input_name; ?>">
    <br/>
    <input type="text" name="age" value="<?php echo $input_age; ?>">
    <br/>
    <input type="submit" value="send">
  </form>

</body>
</html>
