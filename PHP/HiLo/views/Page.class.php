<?php

abstract class page{

	abstract public function ShowBody();


	public function ShowHead()
	{
		$output = "<!doctype html>";
		$output .= "<html lang='en'>";
		$output .= "<head>";
		$output .= "<meta charset='UTF-8'>";
		$output .= "<title>Welcome to the HiLo Game</title>";
		$output .= "</head>";
		$output .= "<body>";
		$output .= "<div class='body'>";

		return $output;
	}

	public function ShowFooter()
	{
		$output = "</div>";
		$output .= "</body>";
		$output .= "</html>";

		return $output;
	}
}




