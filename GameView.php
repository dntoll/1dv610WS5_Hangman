<?php 

class GameView {

	private $alphabet;
    private $game;

	public function __construct() {
		$this->alphabet = range('a','z');

        //Should not be separate instace of GameLogic, should use the same as in index.php
        $this->game = new GameLogic();
	}

	public function show() {
		return $this->createButtons() 
        . "\n" 
        . $this->createImage($this->game->getFailedAttempts())
        . "\n" 
        . $this->createCurrentGuess();
	}

	public function createButtons() {
		$li;

		foreach ($this->alphabet as $key => $buttonValue) {
			$li .= '<button type="submit" name="guess" value=\'' . $buttonValue . '\'>' . $buttonValue . "</button>";
		}
		
		return $li;
	}

    public function createImage($attempts) {
		$image;
        $imageSrc;

        $imageSrc = "/img/HangMan/HangMan/" . $attempts . ".png";

        $image = "<img src=\"" . $imageSrc . "\">";
		
		return $image;
	}

     public function createCurrentGuess() {
		$guess;

        foreach ($this->game->getCurrentGuess() as $key => $letter) {
            $guess .= " " . $letter;
		}

        return $guess;
	}

}

?>