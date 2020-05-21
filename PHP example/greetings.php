<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $fizzbuzz = $_POST['FizzBuzz'];

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
