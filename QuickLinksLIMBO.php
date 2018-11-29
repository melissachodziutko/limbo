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
		<title> Quick Links </title>
		<link rel="stylesheet" href="overall.css">
     </head>
     <body>
          <!--lead back to PracticePageLIMBO.html-->
		<form action="LandingPageLIMBO.php" align = "left">
        <input type="submit" value="Go to Landing Page" />
        </form>
		 <div class = "all-buttons">
           <center>     
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
               </center>
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
