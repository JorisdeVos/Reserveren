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
    <div class="createLink">
        <a href="create.php"><button>voeg toe</button></a>
    </div>
    <div class="container">
        <div class="allHouses">
            <?php
                require_once '../backend/conn.php';
                $query = "SELECT * FROM houses";
                $statement = $conn->prepare($query);
                $statement->execute();
                $houses = $statement->fetchALL(PDO::FETCH_ASSOC);
            ?>
            <?php foreach($houses as $house): ?>
                <div class="house">
                    <img src="../<?php echo $house["image"]; ?>">
                    <div class="housesplit">
                        <b><?php echo $house["name"]; ?></b>
                        <p><?php echo $house["description"]; ?></p>
                        <p><?php echo $house["price"]; ?>$ / Per dag</p>
                        <button><a href="<?php echo $base_url; ?>/admin/edit.php?id=<?php echo $house["id"];?>">Edit</a></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </main>
    <footer>
        <?php require_once'../footer.php'; ?>
    </footer>
</body>