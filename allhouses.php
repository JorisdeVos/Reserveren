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
	<div class="topAllHouses">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eveniet, quas mollitia atque rerum ad earum eius repudiandae, consectetur quisquam dolorem alias corporis facilis sequi, facere nemo officia nisi, sed.</p>
	</div>
	<div class="allHouses">
		<?php
		    require_once 'backend/conn.php';
            $query = "SELECT * FROM houses";
            $statement = $conn->prepare($query);
            $statement->execute();
            $houses = $statement->fetchALL(PDO::FETCH_ASSOC);
      	?>
        <?php foreach($houses as $house): ?>
        	<div class="house">
        		<img src="<?php echo $house["Image"]; ?>">
        		<div class="housesplit">
	        		<b><?php echo $house["Name"]; ?></b>
	        		<p><?php echo $house["Description"]; ?></p>
	        		<p><?php echo $house["Prijs"]; ?>$ / Per dag</p>
	        		<button><a href="housedetail.php?id=<?php echo $house['id']; ?>">Huis reserveren</a></button>
        		</div>
    		</div>
        <?php endforeach; ?>
	</div>
</body>
</html>