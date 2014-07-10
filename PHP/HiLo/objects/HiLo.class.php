<?php

	class HiLo 
	{

		private $secretNumber;
		private $highGuess;
		private $lowGuess;
		private $userName;


		// Constructer
		public function __construct($userName, $highGuess, $lowGuess = 1)
		{
			$this->highGuess = $highGuess;			
			$this->userName = $userName;
			$this->lowGuess = $lowGuess;

			$this->secretNumber = $this->GenerateSecretNumber($highGuess, $lowGuess);
		}


		// Getter/Setters
		public function GetHighGuess()
		{
			return $this->highGuess;
		}

		public function GetLowGuess()
		{
			return $this->lowGuess;
		}

		public function GetUserName()
		{
			return $this->userName;
		}

		// Private methods
		private function GenerateSecretNumber($highGuess, $lowGuess = 1)
		{
			return rand($lowGuess, $highGuess);
		}


		// Public methods
		public function CompareGuess($userGuess)
		{
			if ($userGuess == $this->secretNumber)
			{
				return true;
			}

			if ($userGuess < $this->secretNumber)
			{
				$this->lowGuess = $userGuess;
			}
			else
			{
				$this->highGuess = $userGuess;
			}

			return false;
		}
	}