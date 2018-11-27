<!DOCTYPE html>
<html>
     <head>
		<title> Quick Links </title>
		<link rel="stylesheet" href="QuickLinksCSS.css">
     </head>
     <body>
          <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left">
        <input type="submit" value="Go to Landing Page" />
        </form>
		<button><a href="lost.php"> Lost something</a> </button>
		<button> <a href="found.php">Found something</a> </button>
		<button><a href="adminlogin.php">Admin Login</a></button>
		<h1> Click on an item for more details! </h1>
		<p> 
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
		</p>
		<div class="bothForms">
			<div class="rLost">
				<h2> Recently Lost </h2>
				<!-- Put recently lost table here -->
                <?php
                 #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                show_lost_records($dbc);
                ?>
			</div>
			<div class="rFound">
				<h2> Recently Found </h2>
				<!-- Put recently found table here -->
                <?php
                #$time = $_POST['id'];
                $debug = true;
                require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                show_found_records($dbc);
                ?>
			</div>
		</div>
	 
     </body>
</html>
