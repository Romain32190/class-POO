<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <meta charset="utf-8">
    <title>Pokemon</title>
  </head>
  <body>
    <div class="container">
  <table>
    <thead>
      <th>Nom Pokemon</th>
      <th>PV</th>
      <th>Level</th>
      <th>Attaque 1</th>
      <th>Attaque 2</th>
    </thead>
    <tbody>
      <h1 class="center-align">Tableau Pokemon</h1>

      <?php
      require_once 'test.php';
      foreach ( $pokemons as $pokemon){
        echo '<tr><td>' .$pokemon->getName().'</td><td>' .$pokemon->getPv().'</td><td>' .$pokemon->getLvl().'</td><td>'.$pokemon->getAttack1().'</td><td>'.$pokemon->getAttack2().'</tr>';
      }
      ?>
    </tbody>
  </table>
    <table>

  </body>
</html>
