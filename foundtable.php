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

        <center>
        <h1>Welcome to Limbo!</h1>
     
        <h2> Marist's Lost and Found Database </h2>
        
        
        <p>
        Found something? Take a look at what is currently in our databases.
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
                show_found_records($dbc);
?>
        <form action="found.php">
        <input type="submit" value="Don't see your item?" />
            <button><a href="UpdateFoundItems.php"> Update</a> </button>
        </form>
            
        </center>
        </body>
</html>
