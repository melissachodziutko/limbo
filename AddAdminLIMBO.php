<!DOCTYPE html>
<html>
<head>
	<title> Add New Admin </title>
</head>
<body>
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<!-- Put in table of admin information -->
	<?php
        # Connect to MySQL server and the database
        require( 'includes/connect_db.php' ) ;
        # Includes these helper functions
        require( 'includes/helpers_limbo.php' ) ;
    
        show_admin_records($dbc);
    
    if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
            $uname = $_POST['username'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];

            $result = insert_users($dbc, $uname, $email, $pass);
            echo $result;
            show_admin_records($dbc);
            
        }
        ?>

	<h1> Please complete and submit the following form to add a new admin: </h1>
	<form action="AddAdminLIMBO.php" method="POST">
		<h3> (required fields are marked with an *) </h3>
		<p> 
		<label> Admin's Username: * </label>
			<input type="text" name="username" value="<?php 
				if (isset($_POST['username'])) echo $_POST['username']; 
				?>" required> </input>
		</p>
		<p>
		<label> Admin's Email: * </label>
			<input type="email" name="email" value="<?php 
				if (isset($_POST['email'])) echo $_POST['email']; 
				?>" required> </input>
		</p>
		<p>
		<label> Admin's Password: * </label>
			<input type="text" name="pass" value="<?php 
				if (isset($_POST['pass'])) echo $_POST['pass']; 
				?>" required> </input>
		</p>
		<!--<p>
		<label> Your Password: * </label>
			<input type="text" required> </input>
		</p> -->
		<p> 
			<input type="submit" value="Add"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
<!--</form>-->
   <?php
        
    
# Close the connection
mysqli_close( $dbc ) ;
?>
</body>
</html>