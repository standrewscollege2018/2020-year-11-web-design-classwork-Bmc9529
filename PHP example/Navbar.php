<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Navbar.css">
    <title></title>
  </head>
  <body>



<?php
  // we include the dbconnect.php code anything with database do this
  include("DBConnect.php");

  // 1. set up the query in a variable
  $Results_sql = "SELECT * FROM tutorgroup";

   // 2. We go to the database and run the query.
   // we use mysqli_query(). this takes two parameters: dbconnect and query
  $Results_qry = mysqli_query($DBConnect, $Results_sql);

  // 3. we organise our results into a associative array
  // Bascially we can use the colum headings from the database table
  // we use the mysqli_fetch_assoc() function
  $Results_aa = mysqli_fetch_assoc($Results_qry);
  ?>
  <div class="Topbar">
    <div class="Nav">
    <?php
    do {
      $TutorCode = $Results_aa['TutorCode'];
      $TutorGroupId = $Results_aa['TutorGroupId'];

        echo "<a href='TutorGroup.php?TutorGroup=$TutorGroupId'>$TutorCode</a>";


    } while ($Results_aa = mysqli_fetch_assoc($Results_qry));
    ?>
    </div>
    <div class="Logo">
      <p>LOGO GOES HERE</p>
    </div>
    <div class="Search">
      <form action="tutorgroup.php" method="post">

        <input required type="text" name="EnterName" placeholder="Search For Name" class="Input">
        <button type="Submit" name="button" class="Button">GOOOOOOOOOOOOOOOOOOOO!</button>
      </form>
    </div>

  </div>
  <?php
  // the while condition is just the third step of our process
  // of running the query.
  // It effectively means we repeat until nothing left in the database
  ?>
</body>
</html>
