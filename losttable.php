
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
            Reported in last
			<label for="timeList">  
			<input type="text" id="timeList" placeholder="amount of time" list="searchTime">
			<datalist id="searchTime">
				<option value= "24 hours" id="searchTime1">
				<option value= "7 days" id="searchTime2">
				<option value= "Month" id="searchTime3">
				<option value= "Year" id="searchTime4">
				<option value= "2 years" id="searchTime5">
			</datalist>
        <?php
                #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                show_lost_records($dbc);
?>
      <!-- put the php here-->
        
        <form action="lost.php">
        <input type="submit" value="Don't see your item?" />
            <button><a href="UpdateLostItems.php"> Update</a> </button>
        </form
        </center>
    </body>
            
</html>
