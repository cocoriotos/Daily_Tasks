<?php 
include "db_connection1.php";

$task=$_POST["task"];
$description=$_POST["description"];
$project=$_POST["project"];
$region=$_POST["region"];
$subregion=$_POST["subregion"];
##$kind=$_POST["kind"];
##$completed=$_POST["completed"];
$username1=$_POST["username"];



$query="INSERT INTO dailytask (task,description,project,region,subregion) values ('$task','$description','$project','$region','$subregion')";

$resultado= $conn ->query($query);

if ($resultado){
  echo 	"Task Saved";
  $_SESSION['message']='Task Saved Successfully';
  $_SESSION['message_type']='Success';
  header("refresh:1; url=dailytaskadminmodule.php");
    }
  else{
      echo 	"Task Not Saved";
      header("refresh:1; url=dailytaskadminmodule.php");
      }
?>