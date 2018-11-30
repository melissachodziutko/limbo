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
			
  <center>      
<form action="QuickLinksLIMBO.php" method="POST"> 
<p>reported in last: 
    <select id="id" name="id">   
  <option value="1">24 Hours</option>
  <option value="2">7 Days</option>
  <option value="3">30 Days</option>
<option value="4">1 Year</option>
</select>
<?php 
    require( 'includes/connect_db.php' ) ;
    # Includes these helper functions
    require( 'includes/helpers_limbo.php' ) ;
    $time = 0;
    
    if (isset($_POST['id'])) ; ?> </p> 
             <p><input type="submit"></p> </form>
        <?php
                $check = false;
         if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
            $time = $_POST['id'];
         }
         if ($check == false){
            $debug = true;
            show_lost_records($dbc, $time);
            show_found_records($dbc, $time);
            } 
         else {
                echo "";
            }
        ?>
</form>
		</p>
		<br>
        <br>
         </center> 
     </body>
</html>
