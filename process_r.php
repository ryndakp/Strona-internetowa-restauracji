<?php

	require_once('config.php');

	if(isset($_POST['register']))
	{
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$lastname = mysqli_real_escape_string($con,$_POST['lastname']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
		
		
		if(empty($username) || empty($name) || empty($lastname) || empty($email) || empty($password) || empty ($cpassword))
		{
			echo "Please, fill in the blanks ";
		}
		if ($password != $cpassword) {
		echo 'Passwords not matched ';
		}
		else 
		{
		$Pass = md5($password);
		$sql = "insert into customers (Name,Lastname,Email,Username,Password) values ('$name','$lastname','$email','$username','$Pass')";
		$result = mysqli_query($con,$sql);
		
		if($result){
		
			echo '<script>alert( "Your record has been saved in the datebase ")</script> ';
		
		}
		else
		{
			echo 'Something went wrong';
		}
		
		}
	}


?>