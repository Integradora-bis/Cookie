<?php
require_once 'dbconfig.php';
  $db_connection = mysqli_connect($host, $username,$password,  $dbname);
    if ($db_connection->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
     }
     $sql= "SELECT recipe_id, name from recipes";
     $result=$db_connection->query($sql);

     if($result->num_rows >0){
         while($row=$result->fetch_assoc()){
             echo "recipe id " . $row["recipe_id"]. " Name ". $row["name"]. "<br>";
         }
     } else {
         echo "0 results";
     }
     $db_connection->close();
?>

