



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
        </div>

		<?php
			# Create a query to get the number, fname, lname sorted by number
			# Connect to MySQL server and the database
			require( 'includes/connect_limbo.php' ) ;
			# Includes these helper functions
			require( 'includes/helpers_limbo.php' ) ;
			
			#Show the records
			show_admin_records($dbc);
			#Close the connection
			mysqli_close( $dbc );
		?>
	</body>
</html>