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
		<?php
			# Create a query to get the number, fname, lname sorted by number
			# Connect to MySQL server and the database
			require( 'includes/connect_limbo.php' ) ;
			# Includes these helper functions
			require( 'includes/helpers_limbo.php' ) ;
			if ( $_SERVER[ 'REQUEST_METHOD' ] == 'GET' ) {
			  $description = "" ;
			  $owner = "" ;
			  $room = "" ;
			  $locations ="";
			}
			else {
  				echo "<p>Success! </p>" ;
    			$result = insert_lost_record($dbc, $description, $owner, $locations, $room) ;
  }
			#Show the records
			show_lost_form($description, $owner, $locations, $room);
			#Close the connection
			mysqli_close( $dbc );
		?>
	</body>
</html>