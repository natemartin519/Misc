<?php

class Winner extends Page
{
	private $HiLoObject;

	public function __construct($HiLoObject)
	{
		$this->HiLoObject = $HiLoObject;
	}

	public function ShowBody()
	{
		$output = "Congratulations " . $this->HiLoObject->GetUserName() . "!<br>";
		$output .= "You guessed the corrent number!"; 

		return $output;
	}
}