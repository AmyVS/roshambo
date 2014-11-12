<!DOCTYPE html>
<html>
<head>
	<title>Rock, Paper, Scissors, Lizard, Spock</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/styles.css" rel="stylesheet" media="screen">
</head>
<body class="container">
	<h1>Rock, Paper, Scissors, Lizard, Spock</h1>
	<div class="game">
		<?php
			$plays = array("rock", "paper", "scissors", "lizard", "spock");
			function game($player1, $player2) {
				echo "<p class='player-prompt'>What'll it be, friend?</p>";
			}

			$player1 = $_POST['value'];
			$player2 = $plays[array_rand($plays)];
			game($player1, $player2);
		?>
		<div class="row player-prompt">
			<form method="post" action="">
				<input type="text" name="value">
				<input type="submit">
			</form>
		</div>
			<div class="col-xs-4">
				<?php
					if ((($player1 === "rock" || $player1 === "scissors") && $player2 === "lizard") ||
						(($player1 === "lizard" || $player1 === "paper") && $player2 === "spock") ||
						(($player1 === "spock" || $player1 === "rock") && $player2 === "scissors") ||
						(($player1 === "scissors" || $player1 === "lizard") && $player2 === "paper") ||
						(($player1 === "paper" || $player1 === "spock") && $player2 === "rock")) {
						echo "<p class='winner'>Player One Wins!</p>";
					} elseif ($player1 === $player2) {
						echo "<p class='winner'>It's a tie!</p>";
					} else {
						echo "<p class='winner'>Player Two wins!</p>";
					}
				?>
			</div>
			<div class="col-xs-4">
				<?php echo "<div id='player2'>Player Two: {$player2}</div>"?>
			</div>
		</div>
	</div>
	<div class="container diagram">
		<div class="row">
			<p class="col-xs-3 col-xs-offset-4 item" id="rock">rock</p>
		</div>
		<div class="row row-two">
			<p class="col-xs-3 col-xs-offset-1 item" id="paper">paper</p>
			<p class="col-xs-3 col-xs-offset-3 item" id="lizard">lizard</p>
		</div>
		<div class="row row-three">
			<p class="col-xs-3 col-xs-offset-2 item" id="scissors">scissors</p>
			<p class="col-xs-3 col-xs-offset-1 item" id="spock">Spock</p>
		</div>
	</div>
	<footer class="nav navbar-fixed-bottom">
		<p>&copy; <?php echo date('Y'); ?> Amy Vaillancourt-Sals</p>
	</footer>
</body>
</html>