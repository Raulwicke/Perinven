<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Style-Type" content="text/css" /> 
		<title>Limbo.com</title>
		<link href="/library/skin/tool_base.css" type="text/css" rel="stylesheet" media="all" />
		<link href="/library/skin/morpheus-default/tool.css" type="text/css" rel="stylesheet" media="all" />
        <link href="limbostyles.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" language="JavaScript" src="/library/js/headscripts.js"></script>
	</head>

	<body>
        <div class="menu">
            <?php include 'menu.php';?>
            <p>If you lost something report it here.</p>
        </div>
<!DOCTYPE html>
<html>
<?php
	# Create a query to get the number, fname, lname sorted by number
	# Connect to MySQL server and the database
	require( 'includes/connect_limbo.php' ) ;
	# Includes these helper functions
	require( 'includes/helpers_limbo.php' ) ;
	if ( $_SERVER[ 'REQUEST_METHOD' ] == 'GET' ) {
	  $description = "" ;
	  $finder = "" ;
	  $room = "" ;
	  $locations ="";

	}
  
else if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Initialize an error array.
  $errors = array();

    $description = $_POST[ 'description' ] ;
	if(isset($_POST[ 'finder' ]))
	{
		$finder= $_POST['finder'];
	}
  	$room = $_POST[ 'room' ] ;
    if(isset($_POST[ 'locations' ]))
	{
		$locations= $_POST['locations'];
	}
  # Check for a name & email address.
  if ( empty($_POST['description'] ))  {
  	$errors[] = 'Description' ;
  }
  else {
  	$description = trim( $description )  ;
  }

  if ( empty( $_POST[ 'finder' ] ) ) {
  	$errors[] = 'Finder Name' ;
  }
  else {
  	$finder = trim( $finder )  ;
  }

  if ( empty( $_POST[ 'room' ] ) ) {
  	$errors[] = 'Room' ;
  }
  else {
  	$room = trim( $room )  ;
  }
  if ( empty( $_POST[ 'locations' ] ) ) {
  	$errors[] = 'Locations' ;
  }
  else {
  	$locations = trim( $locations )  ;
  }
  # Report result.
  if( !empty( $errors ) )
  {

    echo '<p>Error! Please enter a valid  ' ;
    foreach ( $errors as $field ) { echo " - $field " ; }

  }
  else {
  	echo "<p>Success! </p>" ;
    $result = insert_found_record($dbc, $description , $finder, $locations, $room) ;
  }
}

# Show the input form with whatever we got for fields
show_found_form($description, $finder, $locations, $room) ;
#Close the connection
mysqli_close( $dbc ) ;

?>
	</body>
</html>