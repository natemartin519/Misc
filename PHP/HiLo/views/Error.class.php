<?php

class Error extends Page
{

	private $errorMessage;

	public function __construct($errorMessage)
	{
		$this->errorMessage = $errorMessage;
	}

	public function ShowBody()
	{
		$output = "<form name='guess' method='get' action='index.php'>";
		$output .= "<h2>" . $this->errorMessage . "</h2>";
		$output .= "<input type='hidden' name='page' value='welcome'>";
		$output .= "<input type='submit' value='OK'>";
		$output .= "</form>	";

		return $output;
	}
}