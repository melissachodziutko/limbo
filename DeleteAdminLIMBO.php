<!DOCTYPE html>
<html>
<head>
	<title> Delete an Admin </title>
</head>
<body>
    <?php
        # Connect to MySQL server and the database
        require( 'includes/connect_db.php' ) ;
        # Includes these helper functions
        require( 'includes/helpers_limbo.php' ) ;
    
        show_admin_records($dbc);
    ?>
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<h1> Please complete and submit the following form to delete an admin: </h1>
	<form action="DeleteAdminLIMBO.php" method="POST">
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
			<input type="text" name="password" <?php 
				if (isset($_POST['password'])) echo $_POST['password']; 
				?>required> </input>
		</p>
		<!-- <p>
		<label> Your Password: * </label>
			<input type="text" name="password" <?php 
				if (isset($_POST['password'])) echo $_POST['password']; 
				?>required> </input>
		</p> -->
		<p> 
			<input type="submit" value="Delete"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
		<?php
		if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
			$username = $_POST['username'] ;
			$email = $_POST['email'] ;
			$password = $_POST['password'] ;
			 if(!empty($username) || !empty($email) || !empty($pass) ){
		   #check for valid inputs
			if (empty($username)){
			echo '<p style="color:red">Please input the admin\'s number</p>' ;    
			}
				else if (empty($email)){
				 echo '<p style="color:red">Please input the admin\'s email adress</p>' ;   
				}
					else if (empty($password)){
					 echo '<p style="color:red">Please input the admin\'s password!</p>' ;   
					}
                 else{  
				$result = delete_admin($dbc, $username) ;
		  #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
				}
			} 
			else {
				echo '<p style="color:red">Please input the admin\'s username, email, and password.</p>' ;
			}
		}
		?>
</body>
</html>