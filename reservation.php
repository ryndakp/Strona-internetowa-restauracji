<html>

<head>
    <meta charset="UTF-8">
    <link href="css/reservation.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="fontello/css/fontello.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&display=swap" rel="stylesheet">
    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="js/main.js"></script>
</head>

<body>
    <?php
include "config.php";
include 'process_l.php';
include 'process_reservation.php';
	
	
?>

    <div class="reserve_table_container">
        <a href="panel_user.php"> Go back </a>
        <div class="book_table">
            <p id="reserve_text"> Reserve a table </p>
            <div id="leftbox" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img class="img" src="img/table22.jpg" alt="img">
            </div>

            <div id="middlebox">
                <form action="" method="POST"  >
					<input class="input-field" type="text" name="phone" placeholder="Enter your phone number" required>
					<input  class="input-field" type="email" name="email" placeholder="Enter your email" required>
					<input class="input-field" type="date" name="date_res" placeholder="Select date for booking" required>
					<input class="input-field" type="time" name="time" placeholder="Select time for booking" required>
                    <textarea type="text" class="input-field textarea-field" name="comment" placeholder="Your suggestions"></textarea>
					<br>
					<br>
					<button type="submit" name="formSubmit" class="btn"  value="Submit">Reserve</button>
                </form>
                
            </div>

            <div id="rightbox" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <img class="img" src="img/food4.jpg" alt="img">
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


<script>
    AOS.init({
        delay: 400,
        duration: 1000
    })

</script>

</html>
