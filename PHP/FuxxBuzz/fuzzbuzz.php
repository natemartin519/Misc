<?php

function printFuzzBuzz($maxValue, $buzzValue = 5, $fuzzValue = 3)
{
	$result = "";

	for($i = 1; $i <= $maxValue; $i++){		

 		if(!($i % ($fuzzValue * $buzzValue))) {
 			$result .= "FuzzBuzz";
 		}
 		else if(!($i % $fuzzValue)) {
			$result .= "Fuzz";
		}
		else if(!($i % $buzzValue)) {
			$result .= "Buzz";
		}
		else {
			$result .= $i;
		}		

		$result .= "<br />";
	}

	return $result;
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo printFuzzBuzz(100); ?>
</body>
</html>