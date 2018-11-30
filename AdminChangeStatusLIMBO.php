<!DOCTYPE html>
<html>
	<head>
		<title> Change Status </title>
	</head>
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
                $status = $_POST['sList'];
                change_status($dbc, $id, $status);
            }
			?>
        <form action="AdminChangeStatusLIMBO.php" method="POST"> 
        <p>Enter Id of Item to Change Status: <input type="text" name="id" value="<?php 
            if (isset($_POST['id'])) echo $_POST['id']; ?>"></p>
        <p>Status: <select id="sList" name="sList">                      
            <option value="lost">lost</option>
            <option value="found">found</option>
            <option value="claimed">claimed</option>
        </select>
		<input type="submit" value="Update Status"> 
		</form>
        </p>
	</body>
</html>