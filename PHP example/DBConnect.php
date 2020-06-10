<?php
  // the DBConnect.php file contains all the information we need to
  //  connect to the database

  // we use the mysqli_connect() function
  // this four parameters (location, username, password, database name)
  // we put this into a variable so we can use it anytime
  $DBConnect = mysqli_connect("localhost", "root", "", "studentdb");

 ?>
