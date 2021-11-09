
<?php
	include"config.php";
	session_start();
?>

<html>
	<head>
	 <link rel="stylesheet" href="css/opinions.css" type="text/css">
	 <style>
	 body{
		 bacground-color:#fff;
	 }
	 .prev-comments
	 {
		 font-size:20px;
	 }
	 </style>
	</head>

	<body>
		
				<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM opinions";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>

			<div class="single-item">
				<h4><?php echo $row['Name']; ?></h4>
				<p><?php echo $row['Comment']; ?></p>
			</div>
			<?php
				
				}
			}
			
			?>
		</div>
				
	</body>
<html>