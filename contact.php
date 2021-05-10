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
		<p class="hq2"> Contact ! </p>
		<hr class="hr1">
		</hr>
			<p class="text">
                <?php
                    $sVoornaam      =       $_GET["voornaam"];
                    $sAchternaam    =       $_GET["achternaam"];
                    $sEmail         =       $_GET["email"];
                    $sOpmerking     =       $_GET["opmerking"];
                    $sTijd 			=		date("d-m H.i");

                    $e = "Dankuwel voor uw opmerking. <br/>";
                    $e .= "Wij zullen spoedig contact met u opnemen. <br/> <br/>";

                    $c = "$sVoornaam <br/> $sAchternaam <br/> $sEmail <br/><br/> $sOpmerking";

                    $bestandsnaam = "contact/$sVoornaam $sAchternaam - $sTijd.html";
                    file_put_contents($bestandsnaam, $c);

                    echo $e;
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