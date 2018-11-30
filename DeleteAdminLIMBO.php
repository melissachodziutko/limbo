<!DOCTYPE html>
<html>
<head>
	<title> Delete an Admin </title>
</head>
<body>
	<!--super admin can delete other admin users-->
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<h1> Please complete and submit the following form to delete an admin: </h1>
	<form action='#'>
		<h3> (required fields are marked with an *) </h3>
		<p>	
		<label> Admin's Username: * </label>
			<input type="text" name="username" <?php 
				if (isset($_POST['username'])) echo $_POST['username']; 
				?>required> </input>
		</p>
		<p>
		<label> Admin's Email: * </label>
			<input type="email" name="email" <?php 
				if (isset($_POST['email'])) echo $_POST['email']; 
				?>required> </input>
		</p>
		<p>
		<label> Admin's Password: * </label>
			<input type="text" name="aPassword" <?php 
				if (isset($_POST['aPassword'])) echo $_POST['aPassword']; 
				?>required> </input>
		</p>
		<p>
		<!--super admin must verify themselves as super admin-->
		<label> Your Password: * </label>
			<input type="text" name="password" <?php 
				if (isset($_POST['password'])) echo $_POST['password']; 
				?>required> </input>
		</p>
		<p> 
		<!--once submitted the admin's privledges & account will be deleted-->
			<input type="submit" value="Delete"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
		<?php
		if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
			$username = $_POST['username'] ;
			$email = $_POST['email'] ;
			$aPassword = $_POST['aPassword'] ;
			$password = $_POST['password'] ;
			 if(!empty($username) || !empty($email) || !empty($aPassword) || !empty($password) ){
		   #check for valid inputs
			if (empty($username)){
			echo '<p style="color:red">Please input the admin\'s number</p>' ;    
			}
				else if (empty($email)){
					
				 echo '<p style="color:red">Please input the admin\'s email adress</p>' ;   
				}
					else if (empty($aPassword)){
					 echo '<p style="color:red">Please input the admin\'s password!</p>' ;   
					}
						else if (empty($password)){
						 echo '<p style="color:red">Please input your password!</p>' ;   
						}
				else{  
				$result = delete_admin($dbc, $username) ;
		  #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
				}
			} 
			else {
				echo '<p style="color:red">Please input the admin\'s username, email, and password, along with your own password.</p>' ;
			}
		}
		?>
</body>
</html>
