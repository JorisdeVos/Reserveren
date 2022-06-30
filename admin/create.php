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
		
	</main>
	<footer>
		<?php require_once'../footer.php'; ?>
	</footer>
</body>