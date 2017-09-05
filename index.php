<?php
require_once("GameView.php");
require_once("GameLogic.php");

$view = new GameView();
$game = new GameLogic();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
	</head>
	<body>
		<form name="form" action="" method="get">
		<div>
				<ul>
				<?php 
					echo $view->show();
					$game->updateCurrentGuess($_GET["guess"]);
				?>
				</ul>
			</div>
    	</form>	
	</body>
</html>