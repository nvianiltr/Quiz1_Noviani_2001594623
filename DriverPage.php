<!DOCTYPE html>
<html>
<head>
	<title>Available Offers | goCarShare</title>
	<link rel="stylesheet" href="goCarShareStyles.css">
</head>
<body>

	<header>
		<img src="companyLogo.png" alt="goCarShare Logo">
	</header>	
	<hr>
	<nav class="Menu">
		<a href="DriverPage.php"><div>AVAILABLE OFFERS</div></a>
		<a href="requestedRoutes.php"><div>REQUESTED OFFERS</div></a>
		<a href="routesOffer.php"><div>MY ROUTES OFFER</div></a>
	</nav>
	<hr>

	<div>
		<?php
			include ('showAvailableRoutes.php');
		?>
	</div>

</body>
</html>