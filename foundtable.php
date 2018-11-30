<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Lost</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="overall.css">
	     <div class="hero-image">
  <div class="hero-text">
    <h1>LIMBO</h1>
    <p>Marist's Number 1 Lost and Found Database</p>
  </div>
</div>
    </head>
    <body>
        <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left">
        <input type="submit" value="Go to Landing Page" />
        </form>

        <center>
        
        <p>
        Found something? Take a look at what is currently in our databases.
        </p>
            
        
      <!-- put the php here-->
            <?php
                #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                if($_SERVER[ 'REQUEST_METHOD' ] == 'GET') {
                    if(isset($_GET['id'])) 
		                  show_record($dbc, $_GET['id']) ;
                }
                $time = 0;
                show_found_records($dbc, $time);
?>
        <form action="found.php">
        <input type="submit" value="Don't see your item?" />
            <button><a href="UpdateFoundItems.php"> Update</a> </button>
        </form>
            
        </center>
        </body>
</html>
