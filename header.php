<?php require_once 'backend/config.php'; ?>
<?php ?>


<header>
	<div class="headerNav">
		<img src="<?php echo $base_url; ?>/img/logo.jpeg">
		<nav>
			<a href="<?php echo $base_url; ?>/allHouses.php">All houses</a> |
			<a href="<?php echo $base_url; ?>/index.php">Home</a> |
			<?php
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            session_start(); 
            if(!isset($_SESSION['user_id'])): ?>
				<a href="<?php echo $base_url; ?>/login.php">Login</a>
			<?php else: ?>
                <?php echo "<p>Welkom,</p> <p><strong>", $_SESSION['name'], "|</strong></p>"?>
                <a href="<?php echo $base_url; ?>/admin/admin.php" style="color: black">admin</a>
                <a href="<?php echo $base_url; ?>/logout.php" style="color: black">Uitloggen</a>
            <?php endif; ?>
		</nav>
	</div>
</header>