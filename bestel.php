<!DOCTYPE html>
<html>
<head>
	<link href="styles/main.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,400i" rel="stylesheet">	
	<title>Mario's Pizza!</title>
</head>
<body>
	
	<div class="header">
		<a class="home" href="index.html#home">
	<h1 class="welkom">Welkom bij Mario's <span class="pizza">Pizza!</span> </h1>
	
	</div>
	<div class="navbar">
		<ul class="nav">
  			<li class="a1"><a class="itemNav1" href="pizza.html#Pizzas">Pizza's</a></li>
			<li class="a2"><a class="itemNav2" href="over_ons.html#Over_ons">Over ons</a></li>
  			<li class="a3"><a class="itemNav3" href="contact.html#Contact">Contact</a></li>
		</ul>
	</div>
	<div class="d_01">
		<p class="hq2"> Bestel ! </p>
		<hr class="hr1">
		</hr>
			<p class="text">
				<?php

					$sVoornaam 			= 		$_GET["voornaam"];
					$sAchternaam 		= 		$_GET["achternaam"];
					$sPlaats 			= 		$_GET["plaats"];
					$sPostcode 			= 		$_GET["postcode"];
					$sHuisnummer 		=		$_GET["huisnummer"];
					$sMargherita 		= 		$_GET["margherita"];
					$sSalami 			= 		$_GET["salami"];
					$sHawaii 			= 		$_GET["hawaii"];
					$sSiciliane 		= 		$_GET["siciliane"];
					$sPepperoni 		= 		$_GET["pepperoni"];
					$sKebab 			= 		$_GET["kebab"];
					$sOpmerking 		= 		$_GET["opmerking"];
					$sTijd 				= 		date("d-m H.i");

					$e = "Beste $sVoornaam $sAchternaam, <br/>";
					$e .= "Dankuwel voor uw bestelling. <br/>";
					$e .= "Uw bestelling zal er binnen 30 minuten zijn. <br/>";
					$e .= "Uw bestelling bevat: <br/> <br/>";
					if($sMargherita > 0)
					{
						$e .= "$sMargherita keer Pizza Margherita. <br/>";
					}
					if($sSalami > 0)
					{
						$e .= "$sSalami keer Pizza Salami. <br/>";
					}
					if($sHawaii > 0)
					{
						$e .= "$sHawaii keer Pizza Hawaii. <br/>";
					}
					if($sSiciliane  > 0)
					{
						$e .= "$sSiciliane  keer Pizza Siciliane . <br/>";
					}
					if($sPepperoni > 0)
					{
						$e .= "$sPepperoni keer Pizza Pepperoni. <br/>";
					}
					if($sKebab > 0)
					{
						$e .= "$sKebab keer Pizza Kebab. <br/>";
					}

					$e .= "<br/> Uw opmerking bevat als volgt: $sOpmerking.";

					echo $e;

					$bestandsnaam = "bestellingen/$sVoornaam $sAchternaam - $sTijd.html";
					file_put_contents($bestandsnaam, $e);

				?>

			</p>
			
		<hr class="hr1">
		</hr>
	<br/>
	<br/>
	</div>
	<br/>
	<div class="alvdiv"><a class="alv" href="alv.html#algemenevoorwaarden" target="_blank">Algemene voorwaarden</a></div>
</body>
</html>

