<html>

<head>
    <meta charset="UTF-8">
    <title>Restauracja P&J </title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="fontello/css/fontello.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100&display=swap" rel="stylesheet">
    				<script>
				//Get the button:
				mybutton = document.getElementById("ButtonToTop");

				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function() {scrollFunction()};

				function scrollFunction() {
				  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					mybutton.style.display = "block";
				  } else {
					mybutton.style.display = "none";
				  }
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
				  document.body.scrollTop = 0; // For Safari
				  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
							}
				</script>
				<style>
				 #ButtonToTop {
				  position: fixed;
				  bottom: 20px; 
				  right: 30px; 
				  border: none;
				  outline: none; 
				  background-color: rgb(217, 179, 140);
				  color: white; 
				  cursor: pointer; 
				  padding: 15px; 
				  border-radius: 50px; 
				  font-size: 18px; 
				}

				#ButtonToTop:hover {
				  background-color: rgb(115, 77, 38);
				}
				.icons a
				{
					text-decoration:none !important;
				}
				.icons a:active
				{
					text-decoration:none !important;
				}
				.icons a:hover
				{
					text-decoration:none !important;
				}
				.icons a:visited
				{
					text-decoration:none !important;
				}
				</style>
</head>

<body>
    <?php
include "config.php";
?>



    <div class="container">
        <div class="home">
            <div class="topnav">
                <a href="login.php">Sign up </a>
				<a href="#opinions">Opinions</a>
                <a href="#contact">Contact</a>
                <a href="#about_header">About</a>
                <a href="#menu">Menu</a>
                <a href="#about">Home</a>
            </div>





            <div class="logo">
                <img src="img/logo2.png">
            </div>
        </div>

        <div class="menu_container">
            <div class="tabela_menu">
                <table class="menu" id="menu">
                    <tr>
                        <td rowspan="2" id="img_menu"><img src="img/menu.png"></td>
                        <td id="download_menu">
                            <p><img src="img/discover_menu.png"></p>
                            <p style="font-size:25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Cras tincidunt, risus at semper cursus, elit dui venenatis justo, efficitur blandit nisi augue at lorem.
                                Nam non velit vel elit porttitor fringilla. Aenean nibh risus, viverra at leo ac, laoreet vestibulum mi.
                                Aenean eleifend venenatis suscipit.</p>
                        </td>
                    </tr>
                    <tr class="menu_pdf">
                        <td id="text_menu" >
                            <p style="color:rgba(201,153,101,100);"> <a href="menu_pj.pdf">CLICK HERE </a></p>
                        </td>
                    </tr>

                </table>
            </div>
        </div>


    </div>
    <div class="about_container">
        <div class="about">
            <table id="about_table">
                <tr>
                    <th id="about_header"> Our Story</th>
                    <td rowspan="2"> <img src="img/burger2.png"></td>
                </tr>
                <tr>
                    <td id="about_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis magna vel est eleifend vulputate.</p>
                        <p>Ut magna purus, viverra et tempus in, cursus sit amet erat. Nam erat enim, luctus sed molestie non, bibendum in ante. Etiam et magna sem.</p>
                        <p>Donec convallis, erat id mollis ultrices, nibh velit tincidunt dolor, sed rutrum tortor justo quis nisl.</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="contact_container">
        <div class="contact" id="contact">
            <div class="contact_table">
                <table id="contact_table">
                    <tr>
                        <tr><th id="left_contact"> <p> Contact </p> </th> 
						<td rowspan="2" colspan="2">   <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466.2848541123737!2d22.004315368083564!3d50.03731623274583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473cfb02103c95bd%3A0x52ac1c526ecedce1!2sPomnik%20Tadeusza%20Ko%C5%9Bciuszki%2C%20Baldach%C3%B3wka%2C%2035-065%20Rzesz%C3%B3w!5e0!3m2!1spl!2spl!4v1619176898116!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe> </td>
						
						</tr> 
								<tr><td id="left_contact_down"> <p> <i class="icon-clock"></i>Opening hours: </p>
										 <p> Mon-Thu : 14.00 - 23.00 </p>
										 <p> Fri -Sun : 16.00 - 01.00 </p>
                            <p> <i class="icon-phone"></i> 684 584 123 </p>
                        </td>
                    </tr>
                  
                </table>
                <div class="icons_container">
                    <div class="icons" id="fb">
                        <p> <a href="https://www.facebook.com"><i class="icon-facebook-circled"></i> </a></p>
                    </div>
                    <div class="icons" id="ig">
                        <p> <a href="https://www.instagram.com"><i class="icon-instagram"></a></i></p>
                    </div>
                    <div class="icons" id="mail">
                        <p> <a href="mailto:pj.restaurant@wp.pl"> <i class="icon-mail"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div class="opinions_container" id="opinions" style = "width:80%; height:80%; margin-left:auto; margin-right:auto; text-align:center;">
		<table class="table_opinion">
		<tr> 
		<td rowspan="2" id="photo_opinion" style="width:60%;"> <img src="img/opinions_photo.jpg"> </td>
		<td style="width:40%;height:50%;"><img src="img/opinions_header.png"></td> </tr>
			<tr><td style="padding-left:3%; padding-right:10px; height:50%; "><iframe id="iframe" src="opinions.php" width="100%" height="100%" style="border:0;">
			</iframe> </td></tr>
			</table>
			<button onclick="topFunction()" id="ButtonToTop" title="Go to top">↑</button>
	</div>
    <div class="footer">
        <p>Copyright &copy; 2021 Patrycja Ryndak, Julia Pawlus</p>
    </div>

    </div>

</body>

</html>
