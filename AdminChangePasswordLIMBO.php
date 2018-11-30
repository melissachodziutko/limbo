<!DOCTYPE html>
 <head><style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
	 
/*this is just page decoration*/
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("marist.jpg");
  height: 50%;
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
  font-size: 40px;
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
	
	<title> Change Admin Password </title>
</head>
<body>	#the site navigation
	<button> <a href="LandingPageLIMBO.php"> Back to landing page </a></button>
	<button> <a href="losttable.php"> Lost something </a> </button>
	<button> <a href="foundtable.php"> Found something </a> </button>
	<button> <a href="adminlogin.php"> Admins </a> </button>
	<!-- Admin table -->
	<h1> Please complete and submit the following form to change an admin's password: </h1>
	<form action='#'>
		#the required fields in order to change the password
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
		<p> 	#once submitted the password will be changed
			<input type="submit" value="Change Password"> </input>
			<input type="reset" value="Clear"> </input>
		</p>
</body>
</html>
