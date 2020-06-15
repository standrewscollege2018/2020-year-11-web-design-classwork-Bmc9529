<?php
  // this page will run a query and display the result(s)

  // we include the dbconnect.php code anything with database do this
  include("DBConnect.php");

  // from post for a FirstName
  if (!isset($_POST['EnterName'])) {
    header("Location: Search.php");
  } else {
    $EnterName = $_POST['EnterName'];
    // there are 3 steps to running a select query
    // 1. set up the query in a variable
    $Results_sql = "SELECT * FROM student WHERE FirstName LIKE '%$EnterName%' OR LastName LIKE '%$EnterName%' ";
  }

  // $EnterName = $_POST['EnterName'];

  // there are 3 steps to running a select query
  // 1. set up the query in a variable
  // $Results_sql = "SELECT * FROM student WHERE FirstName LIKE'%$EnterName%' ";

  // 2. We go to the database and run the query.
  // we use mysqli_query(). this takes two parameters: dbconnect and query
  $Results_qry = mysqli_query($DBConnect, $Results_sql);

  // check if there are any results to display
  // use mysqli_num_rows(), which counts the number of results
  if (mysqli_num_rows($Results_qry) == 0) {
    echo "<h1>No results found</h1>";
  } else {
    // 3. we organise our results into a associative array
    // Bascially we can use the colum headings from the database table
    // we use the mysqli_fetch_assoc() function
    $Results_aa = mysqli_fetch_assoc($Results_qry);

    ?>
    <div class="Table">
    <?php

        // loop through $Results_aa to display all results
        do {
          // display info
          $FirstName = $Results_aa['FirstName'];
          $LastName = $Results_aa['LastName'];
          $TutorGroup= $Results_aa['TutorGroupId'];
          // echos the stuff
          echo "<p class='Name'>$FirstName</p>";
          echo "<p class='Last'>$LastName</p>";
          echo "<p class='Tutor'>$TutorGroup</p>";
        } while ($Results_aa = mysqli_fetch_assoc($Results_qry));
        // the while condition is just the third step of our process
        // of running the query.
        // It effectively means we repeat

    ?>
    </div>
    <?php
  }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Results.css">
    <title></title>
  </head>
  <body>
    <marquee behavior="scroll" scrollamount="5000" direction="right">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
      <img src="Images\FckEthanGang.gif" alt="fckethan dance">
    </marquee>
  </body>
</html>
