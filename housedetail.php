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
	<div class="topDetails">
		<?php
			$id = $_GET['id']; 
			require_once 'backend/conn.php';
			$query = "SELECT * FROM houses WHERE id = :id";
			$statement = $conn->prepare($query);
			$statement->execute([":id" => $id]);
			$houses = $statement->fetch(PDO::FETCH_ASSOC);
   		?>
		<img src="<?php echo $houses['image']; ?>">
		<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur itaque est placeat dolore porro at quibusdam quo modi, maxime iste perferendis repudiandae ex iure beatae corrupti laborum sapiente maiores ipsa?
	</div>
	<div class="midDetails">
		<div class="detailRound">
			<p><?php echo $houses["name"]?></p>
		</div>
		<div class="detailRound">
			<p><?php echo $houses["price"]?>$ Per dag</p>
		</div>
		<div class="detailRound">
			<p><?php echo $houses["aderess"]?></p>
		</div>
		<div class="buyDetails">
			<button>Kopen</button>
		</div>
	</div>
</div>
</body>
</html>