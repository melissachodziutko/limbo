<!DOCTYPE html>
<html>
    
    <head>
		<title> Quick Links </title>
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
		 <div class = "all-buttons">
               
		<!-- lead to lost.html -->
        <form action="losttable.php" >
        <input type="submit" value="Lost Something?" />
        </form>
        
            
           
		<!-- lead to found.html -->
        <form action="foundtable.php" >
        <input type="submit" value="Found Something?" />
        </form>
                
            
           
        <form action="adminlogin.php" align = "top">
        <input type="submit" value="Admin" />
        </form>
            </div>
		<h1> Click on an item for more details! </h1>
		<p> 
			Reported in last
			
         
         <form action="QuickLinksLIMBO.php" method="POST"> 
<p>reported in last: 
    <select id="time" name="time">                      
  <option value="0">Select Time</option>
  <option value="1">24 Hours</option>
  <option value="2">7 Days</option>
  <option value="3">1 Month</option>
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
            <center>
			<div class="rLost">
				
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
                <br>
                <br>
                </center>
		</div>
	 
     </body>
</html>
