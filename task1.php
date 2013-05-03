<?php
function buzzFizz($startRange = 0, $endRange = 0){
	$valid = true;
	if (!is_numeric($startRange)) 
	{
		$valid = false;
		echo "- Start Range has to be an integer \n";
	}
	else if ($startRange <= 0) 
	{
		$valid = false;
		echo "- Start Range has to be a positive integer \n";
	}
	
	if (!is_numeric($endRange)) 
	{
		$valid = false;
		echo "- End Range has to be an integer \n";
	} 
	else if ($endRange <= 0) 
	{
		$valid = false;
		echo "- End Range has to be a positive integer \n";
	}
	
	if ($valid)
	{
		$start = $startRange;
		$end = $endRange;
		if ($endRange < $startRange){
			$start = $endRange;
			$end = $startRange;
		}
		$result = "";
		for ($i = $start; $i <= $end; $i++)
		{
			if ($i > $start)
				{
					$result .= " ";
				}
			
			if (($i % 3) == 0) 
			{
				$result .= "Fizz";
			} 
			if (($i % 5) == 0) 
			{
				$result .= "Buzz";
			}
			
			if (($i % 3) != 0 && ($i % 5) != 0)
			{
				
				$result .= $i;
			}
		}
		echo $result;
	}	
}
?>