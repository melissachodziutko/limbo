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
			
         
         <form action="QuickLinksLIMBO.php" method="POST"> 
<p>reported in last: 
    <select id="time" name="time">                      
  <option value="0">--Select Animal--</option>
  <option value="1">Cat</option>
  <option value="2">Dog</option>
  <option value="3">Cow</option>
</select>


    <!--<input type="text" name="id" value="<?php 
    if (isset($_POST['time'])) echo $_POST['time']; ?>">--> </p> 
<p><input type="submit"></p> 
                <?php
         if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
    $id = $_POST['time'];
             if ($id = 1){
	
            require( 'includes/connect_db.php' ) ;
            # Includes these helper functions
             require( 'includes/helpers_limbo.php' ) ;
              # Shows the records in prints
              show_lost_ql1_records($dbc);
             }
   
 
}     
                ?>
</form>
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
                #require( 'includes/connect_db.php' ) ;
                # Includes these helper functions
                #require( 'includes/helpers_limbo.php' ) ;
                # Shows the records in prints
                show_found_records($dbc);
                ?>
			</div>
		</div>
	 
     </body>
</html>
