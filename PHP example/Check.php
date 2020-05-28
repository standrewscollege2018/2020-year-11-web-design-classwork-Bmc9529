<?php
  $Guessed = $_POST['NumberCheck'];
  $RightNumber = 69;
  if ($Guessed > 100) {
    header("location: Guess.php?error=ToHighRange");
  } elseif ($Guessed < 0) {
    header("location: Guess.php?error=ToLowRange");
  } elseif ($Guessed == $RightNumber) {
    header("location: Guess.php?reply=Correct");
  } elseif ($Guessed < $RightNumber) {
    header("location: Guess.php?reply=ToLow");
  } elseif ($Guessed > $RightNumber) {
    header("location: Guess.php?reply=ToHigh");
  } else {
    header("location: Guess.php?error=NotANumber");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Guess.css">
    <title></title>
  </head>
  <body>
  </body>
</html>
