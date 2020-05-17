<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     // we use echo to create HTML (print)
     echo("<h1>Hello World</h1>");
     //  Variables always start with a $
     $name = "Mickey Mouse";
     // Variables can be entered into strings, such as when we are echoinh something
     echo("Hello $name");

     // if statements use () brackets for the condition and {} for the code to run
      if ($name == "Mickey Mouse") {
        echo("<p>The name was Mickey Mouse</p>");
        // could chuck an extra if so it becomes } else if () {
      } else {
        echo("<p>the name was not Mickeyy Mouse</p>");
      }

      // do {} while () Loop
      $counter = 10;
      do {
        if ($counter > 0) {
          echo("<p>$counter</p>");
          $counter = $counter - 1;
        } else {
          echo("<h1>Blast off!</h1>");
          $counter = $counter - 1;
        }

      } while ($counter >= 0);


     ?>

  </body>
</html>
