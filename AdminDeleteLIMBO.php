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
  height: 20%;
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
  font-size: 30px;
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
    <p>Delete Items</p>
 <!-- </div>
</div>
	<body>
	<button><a href="lost.php"> Lost something</a> </button>
		<button> <a href="found.php">Found something</a> </button>
		<button><a href="LandingPageLIMBO.php">Landing page</a> </button>
		<button> <a href="AdminDeleteLIMBO.php"> Delete an item </a> </button>
		<button> <a href="DeleteAdminLIMBO.php"> Delete an admin </a> </button>
		<button> <a href="AddAdminLIMBO.php"> Add an admin </a> </button>
        <button> <a href="AdminChangePasswordLIMBO.php"> Change an admin's password </a> </button>
        <button> <a href="logoutpage.php">Logout</a> </button>
		<!--admins can delete "resolved" items off the list if claimed by the owner 
		<h1> Select an item from the list to delete. </h1>
		<form action='#'>
		<p> -->
			<!--Reported in last
			<!--<label for="timeList">  
			<input type="text" id="timeList" placeholder="amount of time" list="searchTime">
			<datalist id="searchTime">
				<option value= "24 hours" id="searchTime1">
				<option value= "7 days" id="searchTime2">
				<option value= "month" id="searchTime3">
				<option value= "year" id="searchTime4">
				<option value= "2 years" id="searchTime5">
			</datalist>--
		</p>
		</form>-->
		<!-- Put table here
		<form action='#'>
		<p>
			<input type="submit" value="Delete"> 
		</p>	
		</form>-->
            <p>Change Status</p>
  </div>
</div>
	<body>
		<button><a href="lost.php"> Lost something</a> </button>
		<button> <a href="found.php">Found something</a> </button>
		<button><a href="LandingPageLIMBO.php">Landing page</a> </button>
		<button> <a href="AdminDeleteLIMBO.php"> Delete an item </a> </button>
		<button> <a href="DeleteAdminLIMBO.php"> Delete an admin </a> </button>
		<button> <a href="AddAdminLIMBO.php"> Add an admin </a> </button>
        <button> <a href="AdminChangePasswordLIMBO.php"> Change an admin's password </a> </button>
        <button> <a href="logoutpage.php">Logout</a> </button>
		<h1> Select an item from the list to edit its status. </h1>
        <center>
		<form action='#'>
		<p> 
			Reported in last
			<label for="timeList">  
			<input type="text" id="timeList" placeholder="amount of time" list="searchTime">
			<datalist id="searchTime">
				<option value= "24 hours" id="searchTime1">
				<option value= "7 days" id="searchTime2">
				<option value= "month" id="searchTime3">
				<option value= "year" id="searchTime4">
				<option value= "2 years" id="searchTime5">
			</datalist>
		</p>
		</form>
		<!-- Put table here -->
		<!-- Sorry, this part might not be right -->
			<?php
			 #$time = $_POST['id'];
			$debug = true;
			require( 'includes/connect_db.php' ) ;
			# Includes these helper functions
			require( 'includes/helpers_limbo.php' ) ;
			# Shows the records in prints
            
            $status = "both";
			show_records($dbc, $status);
            if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
                #echo "i am being called";
                $id = $_POST['id'];
                delete_item($dbc, $id);
            }
			?>
        <form action="AdminDeleteLIMBO.php" method="POST"> 
        <p>Enter Id of Item to Delete: <input type="text" name="id" value="<?php 
            if (isset($_POST['id'])) echo $_POST['id']; ?>"></p>
        <p>
		<input type="submit" value="submit"> 
		</form>
            <br>
            <br>
            </center>
	</body>
</html>
