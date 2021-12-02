<?php
$prima_partita=['casa'=> 'Milano',
 'ospite'=> 'Cantù', 
 'punti_casa'=>'55', 
 'punti_ospite'=> '60'];

 $seconda_partita=['casa'=> 'Cantù',
 'ospite'=> 'Milano', 
 'punti_casa'=>'30', 
 'punti_ospite'=> '70'];
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

<h1>Partite Andata e Ritorno</h1>
<h2>Andata</h2>
  <p><?= $prima_partita['casa'].' - '.$prima_partita[ospite].' | '.$prima_partita['punti_casa'].' - '.$prima_partita['punti_ospite']?></p>
  <h2>Ritorno</h2>
    <p><?= $seconda_partita['casa'].' - '.$seconda_partita[ospite].' | '.$seconda_partita['punti_casa'].' - '.$seconda_partita['punti_ospite']?></p>

</body>
</html>