<!--LATAM Channel Coverage, Developed by julian Gonzalez from Dell LATAM SDS PMO team-->
<?php
  session_start();
  $db_host="localhost";
  $db_user="u668548158_root";
  $db_pass="P@ssw0rd123456789";
  $db_name="u668548158_partners";
  $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{
			echo "Not Database connection success";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			exit();/*Break php file and next lines*/
			}
  mysqli_select_db($conn,$db_name) or die ("There is not Database available");/*database is not available*/			
  /*mysqli_set_charset($conexion,"utf8");/*to display  correct latin america characters */
  if ($conn==true)
			  {
			  echo "<center>Congratulations! You are already connected to Main Database</center>";
			  echo "<br>";	
			 
			  }
?>
