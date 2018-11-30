
<!DOCTYPE html>
<html>

    <head>
        
        <title>Lost</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="overall.css">
    </head>
    <body>
        <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left" method = "POST">
        <input type="submit" value="Go to Landing Page" />
        </form>

        <center>
        <p>
           Lost something? Take a look at what is currently in our databases.
        </p>
          
        <?php
                #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                $time = 0;
                show_lost_records($dbc, $time);
?>
      <!-- put the php here-->
        
        <form action="lost.php">
        <input type="submit" value="Don't see your item?" />
            <button><a href="UpdateLostItems.php"> Update</a> </button>
        </form
        </center>
    </body>
            
</html>
