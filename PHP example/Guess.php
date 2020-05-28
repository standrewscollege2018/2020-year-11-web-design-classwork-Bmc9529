<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Guess.css">
    <title></title>
  </head>
  <body>
    <div class="CheckBoxContainer">
      <div class="filler">
        <form class="GuessBox" action="Check.php" method="post">
          Enter Number Between 0-100:
          <input class="InputBox" required type="number" name="NumberCheck" placeholder="Guess a Number">
          <button class="Button" type="Submit" name="button">Guess! (you won't)</button>
        </form>
      </div>

    </div>

    <?php
      if (isset($_GET['error'])) {
        $Error = $_GET['error'];
      }elseif (isset($_GET['reply'])) {
        $Answer = $_GET['reply'];
      }  else {
        echo " something went wrong in set ";
      }

      if (isset($Answer)) {
        echo "$Answer";
      } elseif (isset($Error)) {
        echo "$Error";
      } else {
        echo "sorry something went wrong";
      }

     ?>

  </body>
</html>
