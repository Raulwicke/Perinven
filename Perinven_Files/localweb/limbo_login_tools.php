<!--
This file contains PHP login helper functions.
Orginally created by Ron Coleman.
History:
Who	Date		Comment
RC	 7-Nov-13	Created.
-->
<?php
# Includes these helper functions
require( 'includes/helpers_limbo.php' ) ;
require( 'includes/connect_limbo.php' ) ;

# Loads a specified or default URL.
function load( $page = 'index.php' )
{
  # Begin URL with protocol, domain, and current directory.
  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] ) ;

  # Remove trailing slashes then append page name to URL and the print id.
  $url = rtrim( $url, '/\\' ) ;

  # Execute redirect then quit.
  session_start( );

  header( "Location: $url" ) ;

  exit() ;
}

# Validates the print name.
# Returns -1 if validate fails, and >= 0 if it succeeds
# which is the primary key id.
function validate($dbc, $login,$pass)
{

    if(empty($login))
      return -1 ;
    if(empty($pass))
      return -1 ;
    # Make the query
    $query = "SELECT first_name, pass FROM users WHERE first_name='".$login."' AND pass='".$pass."'";
    $query2 = "SELECT first_name, pass FROM users WHERE first_name='admin' or pass='gaze11e'";
    # Execute the query
    $results = mysqli_query( $dbc, $query ) ;
    check_results($results);
    # If we get no rows, the login failed
    if (mysqli_num_rows( $results ) == 0 )
      return -1;
      return 1;  
    
}
?>