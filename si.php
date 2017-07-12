	<!DOCTYPE html>
	<html>
	<?php 
					 
					if(isset($_POST)){
				
					$principal = $_POST['principal'];
					$timeYears = $_POST['timeYears'];
					$timeMonths = $_POST['timeMonths'];
					$timeDays = $_POST['timeDays'];
					$rate = $_POST['rate'];
					 
					$time = $timeYears +($timeMonths/12.0) +($timeDays/365.0);
					
					$simpleInterest = ($principal*$time*$rate)/100.0;
					
					echo "<h2>Simple Interest is ";
					echo sprintf("%.0f",$simpleInterest);
					echo ".</h2>";
					}
						
				
				?>
				<a href="simple-interest.html">Back</a>
				
</html>