<?php 
include "db_connection1.php";

if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $query = "select * from dailytask where id = $id";
 $result = mysqli_query($conn,$query);
 if ($result) {
     echo "Puedes editar";
   }
   header("refresh:3; url=dailytaskadminmodule.php");  
 }
?>