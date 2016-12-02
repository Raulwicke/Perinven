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
            require('limbo_login_tools.php');
           if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

                $login = $_POST['login'] ;
                $pass = $_POST['pass'] ;

                $check = validate($dbc,$login, $pass) ;
                
                if($check == -1)
                  echo '<P style=color:red>Login failed please try again.</P>' ;

                else
                  load('index.php', $pass);
            }
    // show_admin_form($login, $pass) ;
?>
        <h1>Admin login</h1>
<form action="admin.php" method="POST">
<table>
<tr>
<td>Login:</td><td><input type="text" name="login"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="pass"></td>
</tr>
</table>
<p><input type="submit" ></p>


