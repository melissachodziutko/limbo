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
			show_Link_records($dbc);
			?>
		<form action='#'>
		<p> 
			This item has been
			<label for="sList">
			<input type="text" id="sList" placeholder="status" list="statusList">
			<datalist id="statusList">
				<option value= "lost" id="statusList1">
				<option value= "found" id="statusList2">
				<option value= "claimed" id="statusList3">
			</datalist>	
		</p>
		<input type="submit" value="Update Status"> 
		</form>
	</body>
</html>
