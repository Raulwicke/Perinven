<?php
$debug = true;
function show_records($dbc){
		$query = 'Select description, create_date, status from stuff order by create_date desc';
		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		check_results($results);
		
		if($results)
		{
			echo "<h1>Welcome to Limbo!<br></h1>";
			echo "<h4>If you lost or found something, you're in luck: this is the place to report it.</h4>";
			echo "<br>";
			echo "Reported in last [drop down menu]<br>";
			echo '<TABLE>';
			echo '<TR>';
			echo '<TH>Date/Time</TH>';
			echo '<TH>Status</TH>'; 
			echo '<TH>Stuff</TH>';
			echo '</TR>';
			
			# For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
			{
				echo '<TR>' ;
				echo '<TD>' . $row['create_date'] . '</TD>' ;
				echo '<TD>' . $row['status'] . '</TD>' ;
				echo '<TD>' . $row['description'] . '</TD>' ;
				echo '</TR>' ;
			}
			# End the table
			echo '</TABLE>';
			mysqli_free_result( $results);
		}
		else{
			echo "Something has gone wrong";
		
		}
	}
function check_results($results){
	global $dbc;
	if (!$results){
		echo "<p> SQL ERROR = ". mysqli_error( $dbc ) . '</p>';
	}
}

?>