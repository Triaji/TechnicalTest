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
		$consecutive = 0;
		for ($i = $start; $i <= $end; $i++)
		{
			if ($i > $start)
				{
					$result .= " ";
				}
			
			if (($i % 3) == 0) 
			{
				$result .= "Fizz";
				$consecutive++;
			} 
			if (($i % 5) == 0) 
			{
				$result .= "Buzz";
				$consecutive++;
			}
			
			if (($i % 3) != 0 && ($i % 5) != 0)
			{
				if ($consecutive == 2) 
				{
					$result .= "Bazz";
					$consecutive = 0;
				}
				else
				{
					$result .= $i;
					$consecutive = 0;
				}
				
			}
		}
		echo $result;
	}	
}
?>