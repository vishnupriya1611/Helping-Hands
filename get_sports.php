<?php
session_start();
//$courses=array('primary','secondary','inter','ug','pg');
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=hh2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }
    $q="SELECT * from ".$_POST['table']." where ".$_POST['sport']."=1;";
$stmt = $conn->prepare($q);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll();
   foreach($result as $row){
   	echo "<div class='row'><div class='col-lg-8' style='word-wrap:break-word;'>
   	<br><b> Name:</b> ".$row['name']."
   	<br><b> about:</b> ".$row['about']."
   	<br> <b>mail: </b>".$row['mail']."
   	<br><b>phone:</b> ".$row['phone']."
   	<br></div>";
   if($row['photo']!=NULL){
    echo "<img src='uploads/".$_POST['table']."/".$row['photo']."' class='col-lg-4' height=50%>";
   }
   echo "</div><hr>";
}

?>