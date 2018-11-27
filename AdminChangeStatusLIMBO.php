<!DOCTYPE html>
<html>
	<head>
		<title> Change Status </title>
	</head>
	<body>
		<button><a href="lost.php"> Lost something</a> </button>
		<button> <a href="found.php">Found something</a> </button>
		<button><a href="LandingPageLIMBO.php">Landing page</a> </button>
        <button><a href="AdminDeleteLIMBO.php">Delete Items</a></button>
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
		<button> Update Status </button>
		</form>
	</body>
</html>
