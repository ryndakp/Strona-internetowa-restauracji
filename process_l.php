<?php
	require_once('config.php');
	session_start();
	if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_POST["username"]);  
           $password = mysqli_real_escape_string($con, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM customers WHERE Username = '$username' AND Password = '$password'";  
           $result = mysqli_query($con, $query);  
		   $row  = mysqli_fetch_array($result);
		   
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION["id"] = $row["ID_Customer"];
				$_SESSION["username"] = $row["Username"];  
                header("location:panel_user.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
	
	
	
?>