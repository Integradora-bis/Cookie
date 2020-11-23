<?php 
$db_connection;

function connect(){
    /*$connect = new mysqli("$host", "$username","$password","$dbname");
    if (!$connect) {
        die('Contacte al administrador de la página ' . mysql_error());
    }
    else{
        return $connect;
        echo "holamundo";
    }*/
    $db_connection = new mysqli("db", "root","helloworld",  "cookie");
    if (!$db_connection) {
        die("Connection failed: " . mysql_error());
    }else{
        return $db_connection;
    }
}
?>
