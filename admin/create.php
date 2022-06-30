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
	<header>
		<?php require_once'../header.php'; ?>
	</header>
	<main>
		<form action="../backend/tasksController.php" method="POST">
            <div class="editForm">
                <input type="hidden" name="action" value="create">
                <div class="question">
                    <label for="name">naam:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="question">
                    <label for="description">beschrijving:</label>
                    <textarea type="text" cols="50" rows="4" name="description" id="description"></textarea>
                </div>
                <div class="question">
                    <label for="price">prijs:</label>
                    <input type="number" name="price" id="price"/>
                </div>
                <div class="question">
                    <label for="address">adres:</label>
                    <input type="text" name="address" id="address">
                </div>
                <div class="question">
                    <label for="image">foto naam:</label>
                    <input type="text" name="image" id="image">
                </div>
                <div class="question">
                <input type="submit" value="create">
                </div>
            </div>
        </form>
	</main>
	<footer>
		<?php require_once'../footer.php'; ?>
	</footer>
</body>