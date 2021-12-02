<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
      ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
      ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .grey, .green{
            color :white;
    }

    .grey{
      background-color:gray;
      width:200px
    }

    .green{
      background-color: green;
      width:200px
    }
  </style>
</head>
<body>

<div class="grey">
  <ul>
    <?php for ($i=0; $i < count($db['teachers']); $i++) { ?>
    <li>
      <?= $db['teachers'][$i]['name'].' '.$db['teachers'][$i]['lastname']  ?>
    <?php } ?></li>
  </ul>
</div>
<div class="green">
  <ul>
    <?php for ($i=0; $i < count($db['pm']); $i++) { ?>
    <li>
      <?= $db['pm'][$i]['name'].' '.$db['pm'][$i]['lastname']  ?>
    <?php } ?></li>
  </ul>
</div>
  
</body>
</html>