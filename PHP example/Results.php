<?php
  // this page will run a query and display the result(s)

  // we include the dbconnect.php code
  include("DBConnect.php");

  // from post for a FirstName
  if (isset($_POST['EnterName'])) {
    $EnterName = $_POST['EnterName'];
    // there are 3 steps to running a select query
    // 1. set up the query in a variable
    $Results_sql = "SELECT * FROM student WHERE FirstName LIKE '%$EnterName%' OR LastName LIKE '%$EnterName%' ";
  } else {
    $Results_sql = "SELECT * FROM student WHERE FirstName LIKE 'E%' ";
  }

  // $EnterName = $_POST['EnterName'];

  // there are 3 steps to running a select query
  // 1. set up the query in a variable
  // $Results_sql = "SELECT * FROM student WHERE FirstName LIKE'%$EnterName%' ";

  // 2. We go to the database and run the query.
  // we use mysqli_query(). this takes two parameters: dbconnect and query
  $Results_qry = mysqli_query($DBConnect, $Results_sql);

  // 3. we organise our results into a associative array
  // Bascially we can use the colum headings from the database table
  // we use the mysqli_fetch_assoc() function
  $Results_aa = mysqli_fetch_assoc($Results_qry);

  // display info
  $FirstName = $Results_aa['FirstName'];
  $LastName = $Results_aa['LastName'];
  $TutorGroup= $Results_aa['TutorGroup'];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Results.css">
    <title></title>
  </head>
  <body>
    <div class="Table">
      <?php
        echo "<p class='Name'>$FirstName</p>";
        echo "<p class='Last'>$LastName</p>";
        echo "<p class='Tutor'>$TutorGroup</p>";
       ?>
    </div>
  </body>
</html>
