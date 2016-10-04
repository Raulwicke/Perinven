<?php
$debug = true;

# Shows the records in prints
function show_records($dbc) {
	# Create a query to get the name and price sorted by price
	$query = 'SELECT number, fName,lName FROM presidents ORDER BY number ASC' ;

	# Execute the query
	$results = mysqli_query( $dbc , $query ) ;
	check_results($results) ;

	# Show results
	# Show results
if( $results )
    {
  # But...wait until we know the query succeeded before
  # starting the table.
  echo '<H1>Dead Presidents</H1>' ;
  echo '<TABLE>';
  echo '<TR>';
  echo '<TH>NUMBER</TH>';
  echo '<TH>FIRST NAME</TH>';
  echo '<TH>LAST NAME</TH>';
  echo '</TR>';
 
  # For each row result, generate a table row
  while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
  {
        echo '<TR>' ;
        echo '<TD>' . $row['number'] . '</TD>' ;
        echo '<TD>' . $row["fName"] . '</TD>' ;
        echo '<TD>' . $row["lName"] . '</TD>' ;
        echo '</TR>' ;
  }
    
    # End the table
    echo '</TABLE>';
    
    # Free up the results in memory
    mysqli_free_result( $results ) ;
    }
else
    {
    # If we get here, something has gone wrong
    echo '<p>' . mysqli_error( $dbc ) . '</p>'  ;
    }
}

# Inserts a record into the prints table
function insert_record($dbc, $number, $fName, $lName) {
  $query = 'INSERT INTO presidents(number,fName,lName) VALUES (' . $number . ' ,' . $fName . ',' . $lName . ' )' ;
  show_query($query);

  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;

  return $results ;
}

# Shows the query as a debugging aid
function show_query($query) {
  global $debug;

  if($debug)
    echo "<p>Query = $query</p>" ;
}

# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}
?>