<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
</head>
<body>
	<?php require_once 'header.php'; ?>
	<main>
		<div class="formulierImage">
			<img src="img/formulierImage.jpg">
		</div>
		<div class="form">
			<h2>Aankoop formulier</h2>
			<form action="backend/formController.php" method="post">

				<?php 

				if(isset($_GET['msg'])){
					echo $_GET['msg'];
				}
		
				?>
				
				<div class="form-group">
					<label for="fName">Voornaam:</label>
					<input type="text" name="fName" placeholder="Vul je voornaam in">
				</div>

				<div class="form-group">
					<label for="mName">Tussenvoegsel:</label>
					<input type="text" name="mName">
				</div>

				<div class="form-group">
					<label for="sName">Achternaam:</label>
					<input type="text" name="sName" placeholder="Vul je achternaam in">
				</div>

				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email">
				</div>

				<div class="form-group">
					<label for="address">Adres:</label>
					<input type="address" name="address" placeholder="Vul je adres in">
				</div>
				<div class="form-group">
					<label for="tel">Telefoonnummer:</label>
					<input type="tel" name="tel">
				</div>

				<div class="form-group" id="submit">
					<input type="submit" value="Verzend formulier">
				</div>
			</form>
		</div>

	</main>
	<?php require_once 'footer.php'; ?>
</body>
</html>