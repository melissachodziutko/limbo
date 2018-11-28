<!DOCTYPE html>
<html>
<head>
	<title> Change Admin Password </title>
</head>
<body>
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<!-- Admin table? -->
	<h1> Please complete and submit the following form to change an admin's password: </h1>
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
		<label> Old Password: * </label>
			<input type="text" required> </input>
		</p>
		<p>
		<label> New Password: * </label>
			<input type="text" required> </input>
		</p>
		<p> 
			<input type="submit" value="Change Password"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
</body>
</html>