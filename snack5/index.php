<?php
$text = 'Divergente, dipendente
Lo sei diventato, lo sei stato sempre
Come se il passato non fosse il presente
Come se quel lato non mi appartenesse.

Dire “sono instabile” è più facile
È un altro modo per non sentirmi più responsabile
Fuori sono crudo come Antardite
Se mi sciolgo piango finché sono tutto lacrime.

Sto sull’orlo di un crollo, so che non lo controllo
Uno di noi è di troppo come un sogno in un sogno
Vero borderline con gli eccessi, vero Mr.Hyde più Jekyll
Non si odia mai davvero se non se stessi.

E il tempo passa e non mi manchi
Avresti dovuto ammazzarmi
Non ascolto più quello che dici anche se peggio lo gridi
Come serpenti a sonagli inganni e uccidi.

Siamo nati per esser nemici
E non mi manchi, so che volevi riprovarci
Ti attacchi come un vampiro fino a togliermi il respiro
Sono il contrario di te
Siamo nati per esser nemici.

Chiudo con il tipo con la paranoia
Il cattivo dentro la mia stessa storia
Che ha bisogno sempre di nemici in zona oppure fare guerra con se stessi quando non li trova.
Che deve cacciarsi in un guaio solo per capire che è un guaio
E che mette ciò che è di più caro in palio
Che non sa tenere le emozioni al guinzaglio
Sono il giocattolo rotto con cui gioca il mio doppio.
Uno di noi è di troppo come un sogno in un sogno
…. quel nemico, cerco l’equilibrio
Ma se non lo uccido sono recidivo
Ora devo uccidermi o non sopravvivo
Un’altra volta, un altro giro.
C’è un antidoto, spingi, sono in bilico
C’è un antidoto, spingi, sono in bilico
C’è un antidoto, spingi e sono libero
Sei mai stato libero? Forse sono libero.
C’è un antidoto, spingi, sono in bilico
C’è un antidoto, spingi, sono in bilico
C’è un antidoto, spingi e sono libero
Sei mai stato libero? Sei mai stato ***.
E il tempo passa e non mi manchi
Avresti dovuto ammazzarmi
Non ascolto più quello che dici anche se peggio lo gridi
Come serpenti a sonagli inganni e uccidi
Siamo nati per esser nemici.
E non mi manchi, so che volevi riprovarci
Ti attacchi come un vampiro fino a togliermi il respiro
Sono il contrario di te
Siamo nati per esser nemici.';

$paragraph =  explode('.',$text);
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
  <h1>Testo</h1>
  <div> 
    <?php for ($i=0; $i < count($paragraph); $i++) {
    $p = $paragraph[$i];?>

    <p><?= $p ?>.</p>

  <?php } ?> </div>
</body>
</html>