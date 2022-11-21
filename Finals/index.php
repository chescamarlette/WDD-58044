<?php 
    include("connection.php");
    include("login.php")
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="form">
            <h1>Login Form</h1>
            <form  action="login.php" method="POST">
			<p>
				<label>Username:</label>
				<input type = "text" id = "user" name = "user">
			</p>
			<p>
				<label>Password:</label>
				<input type = "password" id = "pass" name ="pass">
			</p>
			<p>
				<input type="submit" id="btn" value="Login" name = "submit"/>
			</p>
            </form>
        </div>
    </body>
<html>