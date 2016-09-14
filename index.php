<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class='container'>
<?php	if(isset($_SESSION['error']))
	{ ?>
		<div class='error'>
<?php 	foreach($_SESSION['error'] as $name => $message)
		{ ?>
			<p><?= $message; ?></p>
<?php 	} ?>
		</div>
<?php	} ?>

		<div class='gold'>
			<span>Your Gold: </span>
			<input type='text' name="your-gold" value="<?php echo isset($_SESSION['gold_count']) ? $_SESSION['gold_count'] : '' ?>" disabled>
		</div>
		<div class='restart'>
			<form id='restart-form' action="process.php" method="POST">
				<input type="hidden" name="action" value="restart_form" />
				<input type="submit" value="Start OVER"/>
			</form>
		</div>

		<div class="clear"></div>

		<div class="building">
			<h3>Farm</h3>
			<p>(earn 10-20 golds)</p>
			<form action="process.php" method="POST">
				<input type="hidden" name="building" value="farm" />
				<input type="submit" value="Find Gold!"/>
			</form>	
		</div>

		<div class="building">
			<h3>Cave</h3>
			<p>(earn 5-10 golds)</p>
			<form action="process.php" method="POST">
				<input type="hidden" name="building" value="cave" />
				<input type="submit" value="Find Gold!"/>
			</form>	
		</div>

		<div class="building">
			<h3>House</h3>
			<p>(earn 2-5 golds)</p>
			<form action="process.php" method="POST">
				<input type="hidden" name="building" value="house" />
				<input type="submit" value="Find Gold!"/>
			</form>	
		</div>

		<div class="building">
			<h3>Casino</h3>
			<p>(earn/loses 0-50 golds)</p>
			<form action="process.php" method="POST">
				<input type="hidden" name="building" value="casino" />
				<input type="submit" value="Find Gold!"/>
			</form>	
		</div>

		<div class="clear"></div>
		
		<div class='log'>
			<span>Activities:</span>
			<div id="log"><?php echo isset($_SESSION['activity']) ? implode('', array_reverse($_SESSION['activity'])) : ''; ?></div>
		</div>
	</div>
</body>
</html>