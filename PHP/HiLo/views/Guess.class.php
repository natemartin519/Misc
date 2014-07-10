<?php

class Guess extends Page {

	private $HiLoObject;

	public function __construct($HiLoObject)
	{
		$this->HiLoObject = $HiLoObject;
	}

	public function ShowBody()
	{		
		$output = "<form name='guess' method='get' action='index.php'>";
		$output .= $this->HiLoObject->GetUserName() . ", guess a number between ";
		$output .= $this->HiLoObject->GetLowGuess() . " and "; 
		$output .= $this->HiLoObject->GetHighGuess() . ".<br>";
		$output .= "Enter guess:<input type='text' name='guessedNumber'>";
		$output .= "<input type='hidden' name='page' value='guess'>";
		$output .= "<input type='submit' value='Enter'>";
		$output .= "</form>	";

		return $output;
	}
}		