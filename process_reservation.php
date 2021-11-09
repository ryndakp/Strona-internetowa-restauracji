	<?php

	include 'config.php';
	
	
	if(isset($_POST['formSubmit']))
	{
		$username= $_SESSION['username'];
		$sqla="SELECT ID_Customer FROM customers WHERE Username='$username'";
		$user_id= mysqli_query($con,$sqla);
		$row = mysqli_fetch_assoc($user_id);
		$userid= intval($row['ID_Customer']);
		
			$phone=  $_POST['phone'];
			$email= $_POST['email'];
			$date= $_POST['date_res'];
			$time= $_POST['time'];
			$comment=  $_POST['comment'];
			
		$sql = "INSERT INTO reservations (ID_Customer, email, phone_number, Date, Hour, Comment) VALUES ('$userid','$email','$phone','$date','$time','$comment')";
		$result= mysqli_query($con, $sql);
		
		if($result)
		{
		echo "<script>alert('Reservation added successfully. We will contact you to confirm your booking.')</script>";
	}
	else {
		echo "<script>alert('Reservation does not add.')</script>";
	}
		}