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
    <p>Change Password</p>
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
    <center>
	<!-- Admin table? -->
    <?php
        # Connect to MySQL server and the database
        require( 'includes/connect_db.php' ) ;
        # Includes these helper functions
        require( 'includes/helpers_limbo.php' ) ;
    
        show_admin_records($dbc);
    ?>
	<h1> Please complete and submit the following form to change an admin's password: </h1>
	<form action="AdminChangePasswordLIMBO.php" method="POST">
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
		<label> Old Password: * </label>
			<input type="text" name="password" <?php 
				if (isset($_POST['password'])) echo $_POST['password']; 
				?>required> </input>
		</p>
		<p>
		<label> New Password: * </label>
			<input type="text" name="newPass" <?php 
				if (isset($_POST['newPass'])) echo $_POST['newPass']; 
				?>required> </input>
		</p>
		<p> 
			<input type="submit" value="Change Password"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
        <?php
		if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
			$username = $_POST['username'] ;
			$email = $_POST['email'] ;
			$password = $_POST['password'] ;
            $newPass = $_POST['newPass'] ;
			 if(!empty($username) || !empty($email) || !empty($pass) || !empty($newPass)){
		   #check for valid inputs
			if (empty($username)){
			echo '<p style="color:red">Please input the admin\'s number</p>' ;    
			}
				else if (empty($email)){
				 echo '<p style="color:red">Please input the admin\'s email adress</p>' ;   
				}
					else if (empty($password)){
					 echo '<p style="color:red">Please input the admin\'s old password!</p>' ;   
					}
                        else if (empty($newPass)){
					       echo '<p style="color:red">Please input the admin\'s new password!</p>' ;   
					   }
                 else{  
				$result = change_password($dbc, $username, $newPass) ;
		  #echo "<p>Added " . $result . " new print(s) ". $num . " @ $" . $fname . " . $lname . "</p>" ; 
				}
			} 
			else {
				echo '<p style="color:red">Please input the admin\'s username, email, old password, and new password.</p>' ;
			}
		}
		?>
</center>
</body>
</html>