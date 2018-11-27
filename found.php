<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Lost</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="overall.css">
    </head>
    <body>
        <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left">
        <input type="submit" value="Go to Landing Page" />
        </form>
         <form action="foundtable.php" align = "left">
        <input type="submit" value="Back to table" />
        </form>
        
        <center>
        <h1>Welcome to Limbo!</h1>
     
        <h2> Marist's Lost and Found Database </h2>
        
        
        <p>
           Found something? Fill out this form to help other people find their stuff.
        </p>
        

<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;
# Includes these helper functions
require( 'includes/helpers_limbo.php' ) ;


if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $location = $_POST['id'];
    $query = "SELECT id FROM location WHERE name = '" . $location . "'";
    #echo $id;
    show_query($query);
    $id = mysqli_query($dbc, $query);
    #echo "This is id:", $id, "!!!";
    $desc = $_POST['description'] ;
	$create = date('Y-m-d G:i:s');
    $update = date('Y-m-d G:i:s');
    $room = $_POST['room'] ;
    $owner = 'N/A' ;
    $finder = $_POST['finder'] ;
    $item_status = 'found' ;
	#$dob = '0000-00-00 00:00:00'
    
            $result = insert_record($dbc, $id, $desc, $create, $update, $room, $owner, $finder, $item_status) ;
      #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
        
   
 
}
    

# Close the connection
mysqli_close( $dbc ) ;
?>

<!-- HTML with embedded PHP --> 
<form action="found.php" method="POST"> 
<p>Location: <input type="text" name="id" value="<?php 
    if (isset($_POST['id'])) echo $_POST['id']; ?>"> </p> 
<p>Description: <input type="text" name="description" value="<?php 
    if (isset($_POST['description'])) echo $_POST['description']; ?>"></p> 
<p>Room: <input type="text" name="room" value="<?php 
    if (isset($_POST['room'])) echo $_POST['room']; ?>"></p>
<p>Your name: <input type="text" name="finder" value="<?php 
    if (isset($_POST['finder'])) echo $_POST['finder']; ?>"></p>
<p><input type="submit"></p> 
</form>

	
        </body>
</html>
        
       