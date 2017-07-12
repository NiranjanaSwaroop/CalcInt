<!DOCTYPE html>
<html>

<?php
	$principal = $_POST['principal'];
	$timeYears = $_POST['timeYears'];
	$timeMonths = $_POST['timeMonths'];
	$timeDays = $_POST['timeDays'];
	$rateOfInterest = $_POST['rate'];
	$numberOfTimes = $_POST['numberOfTimes'];
	$compoundInterest = 0;
	$rate = $rateOfInterest/100;
	$time = $timeYears+($timeMonths/12)+($timeDays/365);
	if($numberOfTimes){
		$base = 1+$rate/$numberOfTimes;
		$exp = $numberOfTimes*$time;
		$compoundInterest = $principal*(pow($base,$exp));
	}
	
	
	
	echo "<h2>Compound Interest is ";
					echo sprintf("%.0f",$compoundInterest);
					echo ".</h2>";
					
	


?>
<a href="compound-interest.html">Back</a>
</html>