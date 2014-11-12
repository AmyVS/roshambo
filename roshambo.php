<!DOCTYPE html>
<html>
<head>
	<title>Rock, Paper, Scissors, Lizard, Spock</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/styles.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body class="container">
	<h1>Rock, Paper, Scissors, Lizard, Spock</h1>
	<div class="row player-prompt">
		<p>What'll it be, friend?</p>
		<form method="post" action="roshambo.php">
			<input type="text" name="value">
			<button class="btn1">Let's Play</button>
		</form>
	</div>
	<div class="row play-again">
		<?php echo "Want to play again?" ?><br>
		<button class="btn2">Yes, please!</button>
	</div>
	<div class="container diagram">
		<div class="row">
			<p class="col-xs-3 col-xs-offset-4 item" id="rock">rock</p>
		</div>
		<div class="row row-two">
			<p class="col-xs-3 item" id="paper">paper</p>
			<?php
				$human = $_POST["value"];
				$plays = array("rock", "paper", "scissors", "lizard", "spock");
				$computer = $plays[array_rand($plays)];
				function game($human, $computer) {
					if ((($human === "rock" || $human === "scissors") && $computer === "lizard") ||
						(($human === "lizard" || $human === "paper") && $computer === "spock") ||
						(($human === "spock" || $human === "rock") && $computer === "scissors") ||
						(($human === "scissors" || $human === "lizard") && $computer === "paper") ||
						(($human === "paper" || $human === "spock") && $computer === "rock")) {
						echo "<p class='col-xs-3 item' id='winning-stats'>{$human} against {$computer}: player one wins!</p>";
					} elseif ($human === $computer) {
						echo "<p class='col-xs-3 item' id='winning-stats'>{$human} against {$computer}: it's a tie!</p>";
					} else {
						echo "<p class='col-xs-3 item' id='winning-stats'>{$human} against {$computer}: player two wins!</p>";
					}
				}
				game($human, $computer);
			?>
			<p class="col-xs-3 item" id="lizard">lizard</p>
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