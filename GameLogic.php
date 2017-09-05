<?php

class GameLogic {
    
    private $possibleWords;
    private $currentWord;
    private $currentGuess;

    private $failedAttemps;

    public function __construct() {
		$this->possibleWords = array("potatis", "stockholm", "doktorsavhandling", "fotboll", "blomsterbukett", "sommarlov", "skrivbord");
        $this->currentWord = str_split($this->getRandomWord());
        for ($i = 0; $i < $this->getCurrentWordLength(); $i++) {
            $this->currentGuess[$i] = "_";
        }
        $this->failedAttempts = 0;
	}

    public function getRandomWord() {
        $arrayLength = count($this->possibleWords);
        $randomInt = rand(0, $arrayLength -1);
        return $this->possibleWords[$randomInt];
    }

    public function getCurrentWord() {
        return $this->currentWord;
    }

    public function getCurrentWordLength() {
        return count($this->currentWord);
    }

    public function getFailedAttempts() {
        return $this->failedAttempts;
    }

    public function updateFailedAttempts() {
        $this->failedAttempts += 1;
    }

    public function getCurrentGuess() {
        return $this->currentGuess;
    }

    /*
    * Compares the currentWord-array with the $guess
    * and updates the currentGuess to show the letters
    * that have been guessed correctly.
    */
    public function updateCurrentGuess(string $guess) {
        foreach ($this->currentWord as $key => $letter) {
            if ($letter == $guess) {
                $this->currentGuess[$key] == $guess;
            }
        }
    }
}



?>