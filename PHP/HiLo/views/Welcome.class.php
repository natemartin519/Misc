<?php

class Welcome extends Page {

	public function ShowBody()
	{
		$output = "<form name='guess' method='get' action='index.php'>";
		$output .= "Name:<input type='text' name='userName'><br>";
		$output .= "Max Number:<input type='text' name='maxNumber'>";
		$output .= "<input type='hidden' name='page' value='guess'>";
		$output .= "<input type='submit' value='Enter'>";
		$output .= "</form>	";

		return $output;
	}
}
