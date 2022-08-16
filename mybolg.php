<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_DATABASE", "test");
  $Firstname =  $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $Comments =  $_POST['Comments'];
  
  $db = new mysqli("localhost","root","","test");
  if ($db) {
    echo "Connected!";
  }
   else {
    echo "Connection Failed";
  }
  $sql = "INSERT INTO myblog (Firstname,Lastname,Comments)VALUES ('$Firstname','$Lastname','$Comments')";

if (mysqli_query($db, $sql)) {
  echo "Thank you...! your data is inserted..!";
} 
else {
echo "Error....! Can you checked in again" ;
}
mysqli_close($db);
?>