﻿<!DOCTYPE html>
<html>
<head>
	<!--Gør siden mobilvenlig, har stor sammenhæng med bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Definerer charset-->
	<meta charset="UTF-8">
	<!--Oplyser at det er mig der har lavet siden-->
	<meta name="author" content="Jens Tinggaard">
	<!--Favicon-->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon-otg.png">
	<!--Link til Bootstrap stylesheet-->
	<link rel="stylesheet" type="text/css" href="bootstrap4.1/css/bootstrap.min.css">
	<!-- link til online stylesheet
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	-->
	<!--Link til mit stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Link til fonten der bliver brugt på siden-->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet">
	<!--Sidens navn-->
	<title>KIT Eksamen 2018</title>
</head>
<body>

	<!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; top: 0px; right: 0px; left: 0px; z-index: 1;">
		<div class="container">
			<a class="navbar-brand ml-3" href="#">
				<img src="img/otg-logo.png" width="40" height="30" class="d-inline-block align-top" alt="">OTG</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Om Siden <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Historie</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Opbygning</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Søgefeltet virker ikke">
						<button class="btn btn-outline-info my-2 my-sm-0 mr-3" type="submit">Søg</button>
					</form>
				</div>
			</div>
	</nav>


		<!--Main card-->
		<div class="container" style="padding-top: 5rem;">
			<div class="jumbotron">
				<h1 class="display-4">Velkommen!</h1>
				<p class="lead">Denne side er lavet i forbindelse med et eksamensprojekt i Kommunikation og IT C på Odense Tekniske Gymnasium.
					<br>
					<br>
				Bemærk venligst at siden kræver internet adgang for at inlæse optimalt. Grunden til dette er at både fonten og en del af stylingen ligger online.</p>
				<br>
				<p>Siden er skrevet fra bunden dog med hjælp fra Open Source projektet <a href="https://getbootstrap.com">Bootstrap</a>, som er kode der er skrevet i forvejen, der gør det hurtigere og nemmere at programmere en hjemmeside.
					<br>
					Derudover gør det siden mobilvenlig, hvilket også betyder at den ikke ser mærkelig ud selvom man ser den i forskellige størrelser browsere.
					<br>
					<br>
				Jeg har valgt at fokusere på opbygningen af siden samt min modtager, dvs. at jeg ikke har lagt så lang tid i selve informationen på siden, men mere arbejdet bag. Dog virker ting som søgefeltet ikke, da det kræver noget mere arbejde. Derudover er der ikke noget at søge på, da det hele består af denne side.</p>
				<hr class="my-4">
				<p>Har du nogle spørgsmål eller finder du en fejl på siden er du mere end velkommen til at skrive mig en mail på: <a href="mailto:tinggaardjens@gmail.com">tinggaardjens@gmail.com</a>. Ellers er det bare at klikke dig videre på siden til og begynde at lære! Der tages forbehold for rettelser og stavefejl.</p>
			</div>
		</div>

		<br>
		<br>
		<br>


		<!--Tidslinje

		<div class="container" style="position: relative;">
			<div class="card border-dark">
				<div class="card-header border-dark">
					<h2 class="text-center font-weight-bold">Internettets historie</h2>
				</div>
				<div class="card-body border-dark">
					<div class="row justify-content-around">
						<div class="col-2">
							<nav id="navbar-example3" class="navbar navbar-light bg-light">
								<a class="navbar-brand">Tidslinje</a>
								<nav class="nav nav-pills flex-column">
									<a class="nav-link" href="#item-1">1969</a>
									<nav class="nav nav-pills flex-column">
										<a class="nav-link ml-3 my-1" href="#item-1-1">Starten del 1</a>
										<a class="nav-link ml-3 my-1" href="#item-1-2">Starten del 2</a>
									</nav>
									<a class="nav-link" href="#item-2">Item 2</a>
									<a class="nav-link" href="#item-3">Item 3</a>
									<nav class="nav nav-pills flex-column">
										<a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
										<a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
									</nav>
								</nav>
							</nav>
						</div>

						<div class="col-10">
							<div data-spy="scroll" data-target="#navbar-example3" data-offset="150" style="max-height: 30rem; overflow: auto;">
								<h4 id="item-1">1969</h4>
								<p>Internettet voksede ud af et nordamerikansk militært forskningsprojekt fra 1969, ARPA-net (Advanced Research Project Agency), til et verdensomspændende net med tilslutningspunkter i alle verdensdele i løbet af de første 20 år.</p>
								<h5 id="item-1-1">Starten del 1</h5>
								<p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
								<h5 id="item-1-2">Starten del 2</h5>
								<p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
								<h4 id="item-2">Item 2</h4>
								<p>Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
								<h4 id="item-3">Item 3</h4>
								<p>Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
								<h5 id="item-3-1">Item 3-1</h5>
								<p>Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure.</p>
								<h5 id="item-3-2">Item 3-2</h5>
								<p>Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident. Quis magna Lorem anim amet ipsum do mollit sit cillum voluptate ex nulla tempor. Laborum consequat non elit enim exercitation cillum aliqua consequat id aliqua. Esse ex consectetur mollit voluptate est in duis laboris ad sit ipsum anim Lorem. Incididunt veniam velit elit elit veniam Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse irure. Laborum nisi sit est tempor laborum mollit labore officia laborum excepteur commodo non commodo dolor excepteur commodo. Ipsum fugiat ex est consectetur ipsum commodo tempor sunt in proident.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		-->

		<br>
		<br>
		<br>


		<!--Opbygningen af internettet-->
		<div class="container">
			<div class="card border-dark mb-3 mx-auto">
				<div class="card-header border-dark">
					<h2 class="text-center font-weight-bold">Internettets opbygning</h2>
				</div>
				<div class="card-body text-dark">

					<h4 class="card-title">IP-adresse</h4>
					<p class="card-text">Internet Protocol adresse er en adresse bestående af fire bytes, adskilt med punktummer. f.eks. er <code>172.217.12.78</code> adressen for <code>https://www.google.com/</code>. Idet jeg har lavet denne hjemmeside loader åbner jeg den på min <code>localhost</code>, den har adressen <code>127.0.0.1</code>, denne adresse er ikke offentlig, men kører lokalt på min computer. Det kræver også et eksternt program for at kunne køre en localhost - jeg bruger <a href="https://www.apachefriends.org/index.html" title="">XAMPP</a>.</p>
					<br>
					<p class="card-text">Man kan faktisk godt komme til <code>https://www.google.com/</code> ved bare at indtaste <code>172.217.12.78</code> - som jo er IP-adressen for siden, ind i adresselinjen i din browser. Ønsker du selv at finde IP-adressen for en side, kan du bruge <a href="http://get-site-ip.com/" title=""><code>http://get-site-ip.com/</code></a>.</p>
					<br>

					<h4 class="card-title">URL</h4>
					<p class="card-text">Uniform Resource Locator - på dansk "Enhedsressourcefinder", er et stykke sammenhængende tekst, som beskriver en bestemt adresse på internettet. Alle disse sider har en unik IP-adresse. Men man bruger en URL i stedet, da den er meget nemmere at huske. Derudover kan en URL indeholde mere information om hvad det er for en side, end en IP-adresse. Du kan f.eks. godt se om du er på <code>https://images.google.com/</code> eller <code>https://www.google.com/</code>, men hvis det stod med IP-adresser, ville du ikke kunne vide om <code>172.217.12.78</code> er den ene eller den anden side.</p>
					<br>
					<p class="card-text">Men hvorfor bruger man så overhovedet IP-adresser? Det gør man da de fylder meget mindre, og derfor er nemmere for en computer at huske. Så når computersystemer snakker med hinanden, så bruger de IP-adresser, det er ikke svært for dem at huske dem, de fylder jo endda mindre.</p>
					<br>

					<h4 class="card-title">DNS</h4>
					<p class="card-text">Domain Name System er en server der bliver brugt til at komme fra en URL til en IP-adresse. Sådan at når du skriver <code>https://www.google.com/</code> så ved computeren hvilken IP-adresse den skal gå efter, computere bruger jo kun IP-adresser. En DNS er lidt at sammenligne med en ordbog, idet du trykker <i>enter</i> på tastaturet efter at have indtasten en URL, sender computeren en forespørgsel til DNS serveren om at vide hvad sidens IP-adresse er. Dette er ikke noget man som bruger når at opfatte, men det sker hele tiden. Google har deres egen offentlige DNS server, som alle og enhver kan benytte <code>8.8.8.8</code> og <code>8.8.4.4</code>. Jeg vil ikke forklare hvordan man tjekker/skifter DNS server, det kan man google sig til selv.</p>
					<br>

					<h4 class="card-title">Protokol</h4>
					<p class="card-text">En protokol er den del af URL'en der står før domænet, det kan f.eks. være <code>https</code> , <code>http</code> eller <code>ftp</code>. <code>https</code> og <code>http</code> er nok de mest brugte. Det står for HyperText Transefer Protocol og S'et står for Secure. Det vil altså sige at <code>https</code> er den mest sikre, da det kryperer din forbindelse mellem serveren og klienten (din computer). <code>http(s)</code> er en protokol der bliver brugt til at bestemme hvordan beskeder er formareret og sendt over internettet.</p>
				</div>
			</div>
		</div>


		<br>
		<br>
		<br>


		<!--Scripts brugt af Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	</body>
	</html>