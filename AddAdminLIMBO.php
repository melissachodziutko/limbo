<!DOCTYPE html>
 
	<title> Add New Admin </title>
	<!-- this allows super admins to add admins that can access and edit the database--> 

<body>
	
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<!-- Put in table of admin information -->
	<?php
	
	?>
	<!--fill in the blank to add new admin user's name, email and password--> 
	<h1> Please complete and submit the following form to add a new admin: </h1>
	<form action='#'>
		<h3> (required fields are marked with an *) </h3>
		<p> 
		<label> Admin's Username: * </label>
			<input type="text" required> </input>
		</p>
		<p>
		<label> Admin's Email: * </label>
			<input type="email" required> </input>
		</p>
		<p>
		<label> Admin's Password: * </label>
			<input type="text" required> </input>
		</p>
		<p>
		<label> Your Password: * </label>
			<input type="text" required> </input>
		</p>
		<p> 
			<input type="submit" value="Add"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
</body>
</html>
