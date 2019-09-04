<?php
	echo "<table style='width:100%''>";
	echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Date</th>"; 
    echo "<th>Description</th>";
    echo "<th>Debit</th>";
    echo "<th>Credit</th>";
  	echo "</tr>";
  	foreach ($transactions as $trans){
  		echo "<tr>";
  		echo "<td>".$trans->id."</td>";
  		echo "<td>".$trans->date."</td>";
  		echo "<td>".$trans->description."</td>";
  		echo "<td>".$trans->debit."</td>";
  		echo "<td>".$trans->credit."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>