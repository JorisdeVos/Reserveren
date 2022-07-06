<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Document</title>
</head>
</head>
<body>
	<header>
    	<?php require_once 'header.php';  ?>
    </header>
    <main>
    	<div class="loginPage">
	    	<form action="backend/loginController.php" method="POST">
	    		<div class="form-group">
	                <label for="username">Gebruikers naam:</label>
	                <input type="text" name="username" id="username" class="form-input" required>
	            </div>
	            <div class="form-group">
	                <label for="password">Password:</label>
	                <input type="password" name="password" id="password" class="form-input" required>
	            </div>
	            <div class="logInButton">
                	<input type="submit" value="log in" class="button">
                </div>
                <div class="error">
	            	<?PHP 
	                if(isset($_GET['msg'])){
	                    ECHO $_GET['msg'];}
	                ?>
            	</div>
            </div>
	    	</form>
    	</div>
    </main>
</body>
</html>