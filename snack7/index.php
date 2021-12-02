<?php
$alunni = [
  [
    'nome' => 'Rino',
    'cognome'=>'Ceronte',
    'voti'=> [10,8,6,7,9]
  ],
  [
    'nome'=> 'Giro',
    'cognome'=>'In Vespa',
    'voti'=> [5,7,9,8,6]
  ],
  [
    'nome'=> 'Ce',
    'cognome'=>'Rotto',
    'voti'=> [5,7,9,8,6]
  ],
];
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
  <?php for ($i=0; $i < count($alunni); $i++) { ?>
      <p>
      Alunno:  <?= $alunni[$i]['nome']?>
      <?= $alunni[$i]['cognome']  ?> | Media voti: <?= round(array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti'])) ?>
      </p>
    <?php } ?>
</body>
</html>