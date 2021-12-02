<?php
$name= $_GET['name'];
$mail= '';
$age= '';
var_dump($name);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>Accesso:</h1>
    <?php if (strlen($name) >= 3): ?>
      <p>Riuscito</p>
    <?php else: ?>
      <p>Non Riuscito</p>
    <?php endif ?>

   
  </div>
</body>
</html>