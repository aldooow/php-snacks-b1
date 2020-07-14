<?php
/*
Creiamo un array 'matches' contenente altri array i quali rappresentano delle
partite di basket di un’ipotetica tappa del calendario. Ogni array della partita
avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
 Olimpia Milano - Cantù | 55-60
*/

  $array_matches = [
    [
      'team1' => 'Milan',
      'team2' => 'Barcelona',
      'punti1' => 4,
      'punti2' => 2
    ],
    [
      'team1' => 'Inter',
      'team2' => 'Real Madrid',
      'punti1' => 2,
      'punti2' => 1
    ],
    [
      'team1' => 'Juventus',
      'team2' => 'Cagliari',
      'punti1' => 2,
      'punti2' => 2
    ]
  ];

 ?>

<h1>Matches</h1>
<ul>
  <?php for ($i=0; $i < count($array_matches) ; $i++) { ?>
    <?php  $match = $array_matches[$i]?>
    <li><?php echo $match['team1']; ?> - <?php echo $match['team2']; ?> | <?php echo $match['punti1']; ?> - <?php echo $match['punti2']; ?></li>
  <?php }  ?>
</ul>


<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che
non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

  if(empty($name) || empty($mail) || empty($age) ){
    echo '<h2>Acceso negato</h2>';
  }elseif(strpos($mail, '.')===false || strpos($mail, '@')===false){
    echo '<h2>Acceso negato</h2>';
  }elseif(is_numeric($age)===false){
    echo '<h2>Acceso negato</h2>';
  }else{
    echo '<h2>Acceso riuscito</h2>';
  }
  ?>
