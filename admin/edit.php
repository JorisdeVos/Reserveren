<?php 
session_start();
// if(!($_SESSION['admin'] == true) || !isset($_SESSION['user_id']))
// {
//     $msg="u mag deze pagina niet bekijken"; 
//     header("Location: login.php?msg=$msg");
//     exit;
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
	<?php
		$id = $_GET['id'];
        require_once '../backend/conn.php';
        $query = "SELECT * FROM houses WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);
        $houses = $statement->fetchALL(PDO::FETCH_ASSOC);
    ?>
    <header>
    	<?php require_once'../header.php'; ?>
    </header>
    <main>
        <?php foreach($houses as $house): ?>
    	    <div class="editImage">
        		<img src="../<?php echo $house['image']; ?>" />
            </div>
            <form action="../backend/tasksController.php" method="POST">
                <div class="editForm">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="question">
                        <label for="name">naam:</label>
                        <input type="text" name="name" id="name" value="<?php echo $house['name'];?>" >
                    </div>
                    <div class="question">
                        <label for="description">beschrijving:</label>
                        <textarea type="text" cols="50" rows="4" name="description" id="description"><?php echo $house['description'];?></textarea>
                    </div>
                    <div class="question">
                        <label for="price">prijs:</label>
                        <input type="number" name="price" id="price" value="<?php echo $house['price'];?>"/>
                    </div>
                    <div class="question">
                        <label for="address">adres:</label>
                        <input type="text" name="address" id="address" value="<?php echo $house['aderess'];?>" >
                    </div>
                    <div class="question">
                    <input type="submit" value="updaten">
                    </div>
                </div>
            </form>
            <form action="../backend/tasksController.php" method="POST">
                <div class="editForm">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" value="delete">
                </div>
            </form>
        <?php endforeach; ?>
    </main>
    <footer>
    	<?php require_once'../footer.php'; ?>
    </footer>
</body>