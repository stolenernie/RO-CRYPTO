<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
		<!--Meta informatie-->
		<meta charset="UTF-8">
		<html lang="nl-en">
		<title>Uw profiel - ROCrypto</title>
		<meta name="description" content="HTML,CSS,XML,Cryptocoin, ROC, ROCrypto, Cryptocurrencies, Kop Van Noord-Holland">
		<meta name="author" content="Bart Rooijakkers, Wesley van der Slikke, Dane Schuijt">
		<meta name="viewport" content="widht=device-width, initial-scale=1">
		<link rel="stylesheet" href="../stylesheet.css">
</head>
<body>
	<a href="home.html">
		<img src="../Images/Logo.svg" class="logo">
	</a>


	<div class="navigation">
		<ul>
			<li><a href="../Home.html">Home</a></li>
			<li><a href="../Coins.html">Coins</a></li>
			<li><a href="../Info.html">Info</a></li>
			<li><a href="../index.php">Login</a></li> <!-- DEZE VERANDERD MISSCHIEN NAAR PHP VOOR DE DATABASE???-->
		</ul>
	</div>

	<div class="bar">
	<script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
	<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin,dogecoin" currency="eur" background-color="#00958E" locale="en"></coingecko-coin-price-marquee-widget>
	</div>

	<div class="box">
	<div class="header">
		<h2>Admin - Gebruiker toevoegen</h2>
	</div>

  <div class="login">
	<form method="post" action="create_user.php">

		<label class="error">	<?php echo display_error(); ?> </label>


			<label for="username"><b>Gebruikersnaam</b></label><br>
			<input type="text" name="username" value="<?php echo $username; ?>">
			<br>


			  <label for="email"><b>E-mail Adres</b></label><br>
			<input type="text" name="email" value="<?php echo $email; ?>">
			<br>

		  <label for="password"><b>Wachtwoord</b></label><br>
			<input type="password" name="password_1">
			<br>


		  <label for="passwordconfirm"><b>Confirm Wachtwoord</b></label><br>
			<input type="password" name="password_2">
			<br>

			<label for="password"><b>User type</b></label><br>
		<select name="user_type" id="user_type" >
			<option value=""></option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
		<br>


			<button type="submit" class="btn" name="register_btn"> Voeg gebruiker toe</button>

	</form>
</div>
</div>
</body>
</html>
