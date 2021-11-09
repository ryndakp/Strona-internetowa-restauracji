<?php
	include "config.php";
	session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
    <title>Order Food P&J </title>
    <link rel="stylesheet" href="css/panel_user.css" type="text/css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	 <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	
</head>
<body>
	<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
				<p id="user_img"> <img src="img/user.png"> </p>
               <h3><?php echo 'Welcome, ' . $_SESSION['username'] . ' !'?></h3>
            </div>

            <ul class="list-unstyled components">
                <p> </p>
				
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Order Food</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Orders</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">All Orders</a>
                        </li>
                    </ul>
                </li>
				 <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reservations</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="reservation.php">Reserve Table</a>
                        </li>
                    </ul>
                </li>
				
				<li>
				<a href="rate_us.php" > Rate Us  </a>
				</li>
				<li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">
		<h4 class="header" style="margin-left:17%;">Order Food</h4>
			<hr>
			<div class="table_menu_container">
			 <table id="menu_table" class="menu_order_table" cellspacing="0">
                    <thead>
                      <tr style="border-bottom:1px solid rgba(0,0,0,0.1)">
                        <th class="header_order_food">Name</th>
                        <th class="header_order_food">Image</th>
                        <th class="header_order_food">Description</th>
                        <th class="header_order_food">Price</th>
                      </tr>
					  
                    </thead>

					<tbody>
					<?php
					$result = mysqli_query($con, "SELECT * FROM menu");
					
					while($row = mysqli_fetch_array($result))
				{
					?>
					<form method="post" action="cart.php?action=add&id=<?php echo $row["ID_Meal"];?>">
					
					
					<tr style="border-bottom:1px solid rgba(0,0,0,0.1);"><td id="food_name"><?php echo $row["Name"]?></td> 
					<?php
					echo '
					<td id="food_photo"><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'" id="'.$row["ID_Meal"].'_image" name="'.$row['ID_Meal'].'_image" type="file" data-error=".errorTxt'.$row["ID_Meal"].'"></td>';
					?>
					<td id="row_description"><?php echo $row["Description"]?></td>
					<td id="food_price"><?php echo $row["Price"]?> $ </td></tr>
		
					
					
					</form>
					<?php
				}
					?>
					</tbody>
			</table>
			</form>
			</div>
		</div>	
		
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>
</html>