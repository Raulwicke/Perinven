

<style><?php include "limbostyles.css"; ?></style>

<?php
$debug = true;
function show_records($dbc ){
		$query = 'Select description, create_date, status from stuff order by create_date desc';
		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		check_results($results);
		
		if($results)
		{ 
            
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
function show_found($dbc){
		$query = 'SELECT description, stuff.create_date, finder, locations.name
                  FROM stuff, locations 
                  WHERE status = "found" AND
                  locations.location_id = stuff.location_id
                  ORDER BY stuff.create_date desc';
		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		check_results($results);
		
		if($results)
		{ 
            
			echo "<h1>Welcome to Limbo!<br></h1>";
			echo "<h4>You've found something! Thanks for reporting it!</h4>";
			echo '<TABLE>';
			echo '<TR>';
			echo '<TH>Stuff</TH>';
			echo '<TH>Finder</TH>'; 
			echo '<TH>Date</TH>';
            echo '<TH>Location</TH>';
			echo '</TR>';
            echo "</br>";
            # For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
			{
				echo '<TR>' ;
				echo '<TD>' . $row['description'] . '</TD>' ;
				echo '<TD>' . $row['finder'] . '</TD>' ;
				echo '<TD>' . $row['create_date'] . '</TD>' ;
                echo '<TD>' . $row['name'] . '</TD>' ;
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
function show_lost($dbc){
		$query = 'SELECT s.description, s.create_date, s.owner, l.name
                  FROM stuff as s, locations as l 
                  WHERE status = "lost" AND
                  l.location_id = s.location_id
                  ORDER BY s.create_date desc';
		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;
		check_results($results);
		
		if($results)
		{ 
            
			echo "<h1>Welcome to Limbo!<br></h1>";
			echo "<h4>You've Lost something! Let's see if we can help you find it!!</h4>";
			echo '<TABLE>';
			echo '<TR>';
			echo '<TH>Stuff</TH>';
			echo '<TH>Owner</TH>'; 
			echo '<TH>Date</TH>';
            echo '<TH>Location</TH>';
			echo '</TR>';
            echo "</br>";
            # For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ))
			{
				echo '<TR>' ;
				echo '<TD>' . $row['description'] . '</TD>' ;
				echo '<TD>' . $row['owner'] . '</TD>' ;
				echo '<TD>' . $row['create_date'] . '</TD>' ;
                echo '<TD>' . $row['name'] . '</TD>' ;
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
	$arrayName = array('Select Location', );

	if (!$results){
		echo "<p> SQL ERROR = ". mysqli_error( $dbc ) . '</p>';
	}
}
function show_lost_form($description,$owner,$locations, $room) 
{
	global $dbc;
  echo '<form action="addLost.php" method="POST">' ;
  echo '<p>Description/Name: <input type="text" name="description" value="' . $description . '"> </p> ' ;

  echo '<p>Owner Name: <input type="text" name="owner" value="' . $owner . '"></p>' ;
  $sql="SELECT name, location_id FROM locations ORDER BY name";

  echo '<select name="locations" value="">Location</option>';

	foreach ($dbc->query($sql) as $row){
		echo "<option value=$row[location_id]>$row[name]</option>";
	}
  echo "</select>"; 
  
  echo '<p>Room: <input type="text" name="room" value="' . $room . '"></p>' ;
  echo '<p><input type="submit"></p>' ;
  echo '</form>' ;
}


function insert_lost_record($dbc, $description, $owner, $location, $room) {
  $status= 'lost';
  
  $query = 'INSERT INTO stuff(location_id,description,create_date,update_date,room,owner,finder,status) 
  			VALUES ("' . $results . '","' . $description . '" ,now(),now(), "' . $room . '","' . $owner . ' ",Null, "'. $status . '")' ;
  $results = mysqli_query($dbc,$query) ;
  check_results($results) ;
  return $results ;
}

function show_find_form($description,$finder,$locations, $room) 
{
	global $dbc;
  echo '<form action="addFound.php" method="POST">' ;

  echo '<p>Description/Name: <input type="text" name="description" value="' . $description . '"> </p> ' ;

  echo '<p>Finder Name: <input type="text" name="finder" value="' . $finder . '"></p>' ;

  $sql="SELECT name, location_id FROM locations ORDER BY name";
  echo '<select name="locations" value="">Location</option>';
	foreach ($dbc->query($sql) as $row){
		echo "<option value=$row[location_id]>$row[name]</option>";
	}
  echo "</select>"; 
  
  echo '<p>Room: <input type="text" name="room" value="' . $room . '"></p>' ;

  echo '<p><input type="submit"></p>' ;
  echo '</form>' ;
}
function show_admin_form($login, $pass) 
{
    global $dbc;
  echo '<form action="admin.php" method="POST">' ;

  echo '<p>Login: <input type="text" name="login" value="' . $login . '"> </p> ' ;

  echo '<p>Password: <input type="text" name="pass" value="' . $pass . '"></p>' ;

  echo '<p><input type="submit"></p>' ;
  echo '</form>' ;
}
?>
