<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" >
		<title>Form Lab</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Gabarito:wght@400;500;600;700;800;900&family=Glass+Antiqua&family=Gloria+Hallelujah&family=Oswald:wght@200;300;400;500;600;700&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="shortcut icon" href="images/Fabicon.png" type="image/x-icon">
	</head>
	<body>
<!-- HEADER -->
<header>
			<h1>CSS Forms Lab</h1>
		</header>

<!-- MAIN CONTENT -->
<main>
<img src="images/lights.svg" alt="Christmas" class="top_image">

		<!-- MAIN CONTENT: Response to the message -->
		<article class="application_content">
			<h3>Your application was received</h3>

			<?php

				// Full Name
				$fullname = $_GET['fullname'];
				echo ("<p>Hi <strong>$fullname</strong>, We received your application!</p>");

				echo ("<h4>Your Personal Information</h4>");

				// Link Social
				$linkSocial = $_GET['linkSocial'];
				echo ("<p>Your social profile: <strong>$linkSocial</strong></p>");

				// Date of Birth
				$birth = $_GET['birth'];
				echo ("<p>Your date of Birth: <strong>$birth</strong></p>");

				// Age
				$age = $_GET['age'];
				echo ("<p>Your age is: <strong>$age</strong> years old</p>");

				// Size
				$size = $_GET['size'];
				echo ("<p>Your Size: <strong>$size</strong></p>");

				// Address and Postal Code
				$address = $_GET['address'];
				$postalCode = $_GET['postalCode'];
				echo ("<p>Your Address: <strong>$address</strong> Postal Code: <strong>$postalCode</strong></p>");		

				// Contact Information
				$phone = $_GET['phone'];
				$email = $_GET['email'];

				// Slot
				$slot = $_GET['slot'];
				echo ("<p>Your prefered slot: <strong>$slot</strong></p>");

				// Enthusiastic Level
				$enthusiasticLevel = $_GET['enthusiasticLevel'];
				echo ("<p>Your Enthusiastic Level is: <strong>$enthusiasticLevel</strong></p>");


				echo ("<h4>Your Participation Options</h4>");
				// Costume Options 
				$costumeOptions = $_GET['costumeOptions'];
				echo ("<ul>");
				foreach ($costumeOptions as $item) {
					echo('<li><strong>' .$item. '</strong></li>');
				};
				echo ("</ul>");

				
				echo ("<p>We'll be in touch with you to let you know your assigned work in our Christmas Parade 2023 to your phone <strong>$phone</strong> and/or your email address, <strong>$email</strong></p>");
			?>

			<h4 style="text-align:center;">Thanks for your participation!</h4>
			<a href="index.html" class="link_back">Place another application</a>
		</article>
		<img src="images/background.svg" alt="Christmas" class="bottom_image">
</main>

		<!-- FOOTER -->
		<footer>
			<p>Form and CSS Styling - Carolina Arce 2023</p>
			<a href="https://www.freepik.com/free-vector/christmas-toys-background-flat-design_11238183.htm#page=11&query=concept%20of%20christmas%20parade&position=0&from_view=search&track=ais&uuid=194ba589-7dda-4c06-9a88-934461eb4fd7" target="_blank">
				Images from Freepik 
			</a> 		
		</footer>
	
</body>
</html>