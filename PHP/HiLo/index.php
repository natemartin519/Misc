<?php
	
	require_once('./objects/HiLo.class.php');
	require_once('./views/Page.class.php');

	session_start();
	
	$currentPage = "";

	if (isset($_REQUEST['page']))
	{
		$currentPage = $_REQUEST['page'];
	}

	switch ($currentPage){
		case "guess":
			
			if (!isset($_SESSION['HiLoObject']))
			{
				if (isset($_REQUEST['userName']) && isset($_REQUEST['maxNumber']))
				{
					$_SESSION['HiLoObject'] = new HiLo($_REQUEST['userName'], $_REQUEST['maxNumber']);
				}
				else
				{
					// Redirect to error page
					header ("Location: ./index.php?page=error&errorMessage=Unable to initalize object");
				}
			}
			
			if (isset($_REQUEST['guessedNumber']))
			{
				if ($_SESSION['HiLoObject']->CompareGuess($_REQUEST['guessedNumber']))
				{
					// Redirect to Winner page
					header ("Location: ./index.php?page=winner");
				}
			}

			require_once('./views/Guess.class.php');
			$page = new Guess($_SESSION['HiLoObject']);			

			break;
		case "winner":

			if (!isset($_SESSION['HiLoObject']))
			{
				// Redirect to error page
				header ("Location: ./index.php?page=error&errorMessage=No session object found");
			}

			require_once('./views/Winner.class.php');	
			$page = new Winner($_SESSION['HiLoObject']);	

			session_destroy();
			break;	
		case "error":

			if (isset($_REQUEST['errorMessage']))
			{
				$errorMessage = $_REQUEST['errorMessage'];
			}
			else
			{
				$errorMessage = "There was an error with your error";
			}

			require_once('./views/Error.class.php');
			$page = new Error($errorMessage);

			session_destroy();
			break;
		default:

			require_once('./views/Welcome.class.php');		
			$page = new Welcome();

			session_destroy();
			break;
	}
	
	echo $page->ShowHead();
	echo $page->ShowBody();
	echo $page->ShowFooter();