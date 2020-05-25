<?php
  // checks if post is not set
  if (!isset($_POST['FizzBuzz'])) {
    // if its not set sends them back to set it
    header("Location: Postexamplefizzbuzz.php");
  }
  // since post is set it sets the fizzbuzz
  $fizzbuzz = $_POST['FizzBuzz'];


  // if its 100 it rickrolls
  if ($fizzbuzz == 100 or $fizzbuzz == 420) {
    header("Location: RickRoll.php");

    // else if fizzbuzz = to funny number it sends them to consent tea
  } elseif ($fizzbuzz == 69) {
    header("Location: ConsentIsTea.php");
    // checks if the fizzbuzz is now a number if so it will start up
  } elseif ($fizzbuzz >= 1 ) {
    echo("FIZZBUZZ STARTING UP BRRRRRRRRRRRR:");
    // else it will be a negative number or a string that isnt rickroll so sends them back
  } else {
    header("Location: Postexamplefizzbuzz.php");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $counter = 1;
      do {
        if ($counter % 3 == 0 and $counter % 5 == 0) {
          echo("<p>FizzBuzz</p>");
          $counter += 1;
        } else if ($counter % 5 == 0) {
          echo("<p>Buzz</p>");
          $counter += 1;
        } elseif ($counter % 3 == 0) {
          echo("<p>Fizz</p>");
          $counter += 1;
        }  else {
          echo("<p>$counter</p>");
          $counter = $counter + 1;
        }
      } while ($counter != ($fizzbuzz + 1));

     ?>
  </body>
</html>
