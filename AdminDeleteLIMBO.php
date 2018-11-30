<!DOCTYPE html>
<html>
	<head>
		<title> Delete Items </title>
	</head>
	<body>
		<button><a href="lost.php"> Lost something</a> </button>
		<button> <a href="found.php">Found something</a> </button>
		<button><a href="LandingPageLIMBO.php">Landing page</a> </button>
        <button><a href="AdminChangeStatusLIMBO.php">Change Status</a></button>
		<!--admins can delete "resolved" items off the list if claimed by the owner--> 
		<h1> Select an item from the list to delete. </h1>
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
		<form action='#'>
		<p>
			<input type="submit" value="Delete"> 
		</p>	
		</form>
	</body>
</html>
