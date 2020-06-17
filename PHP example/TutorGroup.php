<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Results.css">
    <title></title>
  </head>
  <body>
    <?php
      include("Navbar.php")
     ?>
    <?php
    if (isset($_GET['TutorGroup'])) {
      // header("Location: search.php");
      $TutorGroupId = $_GET['TutorGroup'];
      // 1. set up the query in a variable
      $Results_sql = "SELECT * FROM tutorgroup WHERE TutorGroupId = $TutorGroupId";
      $Results_sqla = "SELECT * FROM student WHERE TutorGroupId = $TutorGroupId";
    } elseif (isset($_POST['EnterName'])) {
      $EnterName = $_POST['EnterName'];
      // 1. set up the query in a variable
      $Results_sql = "SELECT * FROM tutorgroup WHERE TutorGroupId = $TutorGroupId";
      $Results_sqla = "SELECT * FROM student WHERE TutorGroupId = $TutorGroupId";
    } else {
      header("Location: Search.php");
    }

    // we include the dbconnect.php code anything with database do this
    include("DBConnect.php");



     // 2. We go to the database and run the query.
     // we use mysqli_query(). this takes two parameters: dbconnect and query
    $Results_qry = mysqli_query($DBConnect, $Results_sql);
    $Results_qrya = mysqli_query($DBConnect, $Results_sqla);

    if (mysqli_num_rows($Results_qry) == 0 or mysqli_num_rows($Results_qrya) == 0) {
      echo "<h1>No Students found</h1>";
    } else {
      // 3. we organise our results into a associative array
      // Bascially we can use the colum headings from the database table
      // we use the mysqli_fetch_assoc() function
      $Results_aa = mysqli_fetch_assoc($Results_qry);
      $Results_aaa = mysqli_fetch_assoc($Results_qrya);
      ?>
      <div class="Table">
      <?php
          // loop through $Results_aa to display all results
          do {
            // display info
            $FirstName = $Results_aaa['FirstName'];
            $LastName = $Results_aaa['LastName'];
            $TutorGroup = $Results_aa['TutorCode'];
            // echos the stuff
            echo "<p class='Name'>$FirstName</p>";
            echo "<p class='Last'>$LastName</p>";
            echo "<p class='Tutor'>$TutorGroup</p>";
          } while ($Results_aaa = mysqli_fetch_assoc($Results_qrya));
          // the while condition is just the third step of our process
          // of running the query.
          // It effectively means we repeat
      ?>
      </div>
      <?php
    }
    ?>
  </body>
</html>
