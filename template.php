<?php
//session_start();
//var_dump($_SESSION);
//$_GET["text"];
var_dump($_GET);
//lagra array I SESSIONVARREN
//$_SESSION["letters"] = array("a", "b");
//sist
//$_SESSION["letters"][] = "C"
// Page created by Shepard [Fabian Pijcke] <Shepard8@laposte.net>
// Arno Esterhuizen <arno.esterhuizen@gmail.com>
// and Romain Bourdon <rromain@romainbourdon.com>
// and Hervé Leclerc <herve.leclerc@alterway.fr>
// Icons by Mark James <http://www.famfamfam.com/lab/icons/silk/>
// Version 2.5 -> 3.0.0 by Dominique Ottello aka Otomatic
// Update 3.0.6
// Check duplicate ServerName
// Support of VitualHost by IP

echo "Hello world!"; 
/*
$view = new GameView();

class GameView {

	private $alphabet = array("a", "z");
	//private $alphabet = range('a', 'z');

	public function __construct() {
	}

	public function show() {
		echo $this->createButtons();
	}

	public function createButtons() {
		$li;

		foreach ($alphabet as $key => $buttonValue) {
			//$buttonValue = $value
			$li .= "<button type="button">$buttonValue</button>";
			//$li .= "<li>$manufacturer: $title</li>";
		}
		
		$ret = "
			<div>
				<ul>
					$li
					<button type="button">$buttonValue</button>
				</ul>
			</div>	
			";
		
		return $ret;
	}

}*/


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf8'>
		<!--<title>$this->title</title>-->
	</head>
	<body>
		<button type="button" value="A">Click Me!</button>
		<form action="index.php" method="get">
			<input type="text">
			<input type="submit">
		</form>
		
		<?php
		//show();
		//$view->show();
		?>
		
	</body>
</html>