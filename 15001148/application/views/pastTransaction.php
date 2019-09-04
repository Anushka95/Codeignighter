<?php
	echo "<form action='/Statement' method='get'>";
	echo "<label> Account Number: </label>";
	echo "<select name='accountno'>";
	foreach ($accounts as $row){
		echo "<option value='".$row->accountid."'>".$row->accountid."</option>";
		}
	echo "</select> <br>";
	echo "<label> Start Date: </label>";
	echo "<input name='startdate' type='date'/> <br>";
	echo "<label> End Date: </label>";
	echo "<input name='enddate' type='date'/> <br>";
	echo "<input name='Get Statement' type='submit'/>";
	echo "</form>";
?>