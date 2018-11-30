<!DOCTYPE html>
<html>
    <!DOCTYPE html>
<html>
    
    <head><style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("marist.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 40px;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

input[type=submit] {
    border: 1px solid #f44c0e;
    color: #fff;
    background: tomato;
    padding: 10px 20px;
    border-radius: 5px;
}
input[type=submit]:hover {
    background: #f44c0e;
}
</style>
         
        <div class="hero-image">
            <link rel="stylesheet" href="overall.css">
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
session_start();
if (!empty($_SESSION)){
if ($_SESSION['logged_in'] == 'logged'){
    load('loginAuthorization.php', $pid);
     }
}
else {
    if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    #prompts for username and password if login is selected
    $uname = $_POST['username'] ;
    $pass = $_POST['password'] ;
    
    $pid = validate($uname, $pass) ;

    if($pid == -1)
        echo '<P style=color:red>Login failed please try again.</P>' ;

    else {
        session_start( );
        $_SESSION['logged_in'] = 'logged';
        load('loginAuthorization.php', $pid);
        }
    }
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
