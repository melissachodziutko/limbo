<!DOCTYPE html>
<html>
	<div class="hero-image">
  <div class="hero-text">
    <h1>LIMBO</h1>
    <p>Marist's Number 1 Lost and Found Database</p>
  </div>
</div>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

# Connect to MySQL server and the database
require( 'includes/adminlogin_tools.php' ) ;

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

    $uname = $_POST['username'] ;
    $pass = $_POST['password'] ;
    
    $pid = validate($uname, $pass) ;

    if($pid == -1)
      echo '<P style=color:red>Login failed please try again.</P>' ;

    else
      load('AdminChangeStatusLIMBO.php', $pid);
}
?>
    <head>
        
        <title>Login</title>
        <link rel="stylesheet" href="csslogin.css">
    </head>
    <body>
		<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
        <h2>Welcome to Limbo!</h2>
     
        <h2> Marist's Lost and Found Database </h2>
		
        <h3>Login</h3>
        <center>
		<form action ="adminlogin.php" method="Post">
        <table>
            <tr>
            <td>Username:</td><td><input type="text" name="username"></td>
            </tr>
            <tr>
            <td>Password:</td><td><input type="password" name="password"></td></tr>
        </table>
        <p><input type="submit" ></p>
		</form>
        </center>
    </body>
    
</html>
          
<!-- Get inputs from the user. -->
<!--<h1>Presidents login</h1>
<form action="presidents_login.php" method="POST">
<table>
<tr>
<td>Last Name:</td><td><input type="text" name="lname"></td>
</tr>
</table>
<p><input type="submit" ></p>
</form>
</html>-->

<!--Username:<br>
		<input type="text" name="admin"><br>
		Password:<br>
		<input type="text" name="password">-->
       
        
        
        
        
   
        
       
