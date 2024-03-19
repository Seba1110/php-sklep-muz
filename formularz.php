<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sklep muzyczny</title>
		<link rel="stylesheet" type="text/css" href="muzyka.css">
	</head>
	<body>
		<div id="baner">
			<h1>SKLEP MUZYCZNY</h1>
		</div>
		<div id="lewy">
			<h2>NASZA OFERTA</h2>
			<ol>
				<li>Instrumenty muzyczne</li>
				<li>Sprzęt audio</li>
				<li>Płyty CD</li>
			</ol>
		</div>
			<?php
			$imie = $_POST["imie"];
			$nazwisko = $_POST["nazwisko"];
			$adres = $_POST["adres"];
			$telefon = $_POST["telefon"];

			$login = $_POST["login"];
			$haslo = $_POST["haslo"];

			if(
				$imie =="" or
				$nazwisko =="" or
				$adres =="" or
				$telefon =="" or
				$login =="" or
				$haslo ==""
			)
			{
				echo "wszystkie pola musza byc puste";
			}
			$conn = mysqli_connect("localhost","root","","baza1");
			echo "Konto $imie $nazwisko zostalo zarejestrowane";

			$zapytanie1 = "INSERT INTO `uzytkownicy` (`imie`, `nazwisko`, `adres`, `telefon`) VALUES ('$imie', '$nazwisko', '$adres', '$telefon');";
			mysqli_query($zapytanie1, $conn);

			$zapytanie2 = "INSERT INTO `konta` (`login`, `haslo`) VALUES ('$login', '$haslo');";
			mysqli_query($zapytanie2, $conn);
			mysqli_close($conn)
			?>	
		</div>
	</body>
</html>